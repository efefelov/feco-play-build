require('dotenv').config();
const express = require('express');
const cors = require('cors');
const bcrypt = require('bcryptjs');
const jwt = require('jsonwebtoken');
const path = require('path');
const db = require('./database');
const app = express();
const PORT = process.env.PORT || 3000;
const JWT_SECRET = process.env.JWT_SECRET || 'feco-secret-key-change-in-production';
app.use(cors());
app.use(express.json());
app.use(express.static('public'));
// Регистрация
app.post('/api/register', async (req, res) => {
  try {
    const { username, email, password } = req.body;
    if (!username || !email || !password) {
      return res.status(400).json({ error: 'Все поля обязательны' });
    }
    const hashedPassword = await bcrypt.hash(password, 10);
    const stmt = db.prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');
    const result = stmt.run(username, email, hashedPassword);
    res.json({ message: 'Пользователь зарегистрирован', userId: result.lastInsertRowid });
  } catch (error) {
    if (error.message.includes('UNIQUE constraint failed')) {
      res.status(400).json({ error: 'Пользователь или Email уже существуют' });
    } else {
      res.status(500).json({ error: 'Ошибка сервера' });
    }
  }
});
// Вход
app.post('/api/login', async (req, res) => {
  try {
    const { username, password } = req.body;
    const user = db.prepare('SELECT * FROM users WHERE username = ?').get(username);
    if (!user || !(await bcrypt.compare(password, user.password))) {
      return res.status(401).json({ error: 'Неверный логин или пароль' });
    }
    const token = jwt.sign({ id: user.id, username: user.username }, JWT_SECRET, { expiresIn: '24h' });
    // Сохраняем сессию (опционально)
    const expiresAt = new Date(Date.now() + 24 * 60 * 60 * 1000).toISOString();
    db.prepare('INSERT INTO sessions (user_id, token, expires_at) VALUES (?, ?, ?)').run(user.id, token, expiresAt);
    res.json({ token, username: user.username, id: user.id });
  } catch (error) {
    res.status(500).json({ error: 'Ошибка сервера' });
  }
});
// Получение профиля (защищено)
app.get('/api/profile', (req, res) => {
  const authHeader = req.headers.authorization;
  if (!authHeader || !authHeader.startsWith('Bearer ')) {
    return res.status(401).json({ error: 'Токен не предоставлен' });
  }
  const token = authHeader.split(' ')[1];
  try {
    const decoded = jwt.verify(token, JWT_SECRET);
    const user = db.prepare('SELECT id, username, email, created_at FROM users WHERE id = ?').get(decoded.id);
    if (!user) return res.status(404).json({ error: 'Пользователь не найден' });
    const games = db.prepare('SELECT * FROM games WHERE user_id = ? ORDER BY played_at DESC').all(decoded.id);
    res.json({ user, games });
  } catch (error) {
    res.status(401).json({ error: 'Невалидный токен' });
  }
});
// Добавление результата игры
app.post('/api/game-result', (req, res) => {
  const authHeader = req.headers.authorization;
  if (!authHeader || !authHeader.startsWith('Bearer ')) {
    return res.status(401).json({ error: 'Токен не предоставлен' });
  }
  const token = authHeader.split(' ')[1];
  try {
    const decoded = jwt.verify(token, JWT_SECRET);
    const { gameName, score } = req.body;
    db.prepare('INSERT INTO games (user_id, game_name, score) VALUES (?, ?, ?)').run(decoded.id, gameName, score);
    res.json({ message: 'Результат сохранен' });
  } catch (error) {
    res.status(401).json({ error: 'Невалидный токен' });
  }
});
app.listen(PORT, () => {
  console.log(`Сервер запущен: http://localhost:${PORT}`);
  console.log(`База данных: ${path.join(__dirname, 'feco.db')}`);
});
