<?php
require_once __DIR__ . '/includes/auth.php';
startSecureSession();
$loggedIn = isLoggedIn();
$user = getCurrentUser();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FECO Play — Игровая вселенная ФабрикиДВС</title>
    <meta name="description" content="FECO Play — симулятор завода по производству двигателей внутреннего сгорания. Управляй производством поршневых и газотурбинных двигателей, создавай технику по стихиям!">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <!-- Навигация -->
    <nav class="navbar">
        <div class="container">
            <a href="/" class="navbar-brand">⚙️ FECO Play</a>
            <ul class="navbar-nav">
                <li><a href="#about">О проекте</a></li>
                <li><a href="#elements">Стихии</a></li>
                <li><a href="#pricing">Тарифы</a></li>
                <?php if ($loggedIn): ?>
                    <li><a href="/game.php">Играть</a></li>
                    <li><a href="/dashboard.php">Кабинет</a></li>
                    <li><a href="/auth/logout.php">Выйти</a></li>
                <?php else: ?>
                    <li><a href="/login.php">Войти</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <h1>⚙️ FECO Play</h1>
            <p class="subtitle">Игровая вселенная ФабрикиДВС — симулятор завода по производству поршневых и газотурбинных двигателей внутреннего сгорания. Создавай машины, оборудование и технику для всех стихий!</p>
            <div class="hero-badges">
                <span class="hero-badge hero-badge-online">🌐 Онлайн — строй завод</span>
                <span class="hero-badge hero-badge-offline">🔥 Огонь · 🌍 Земля · 💧 Вода · 💨 Воздух</span>
            </div>
            <?php if ($loggedIn): ?>
                <a href="/game.php" class="btn btn-primary btn-large">Продолжить игру</a>
            <?php else: ?>
                <a href="/register.php" class="btn btn-primary btn-large">Начать бесплатно</a>
            <?php endif; ?>
        </div>
    </section>

    <!-- О проекте -->
    <section class="section" id="about" style="background: var(--bg-secondary);">
        <div class="container">
            <h2 class="section-title">Что такое FECO Play?</h2>
            <div class="cards-grid">
                <div class="card">
                    <div class="card-icon">🏭</div>
                    <h3>Симулятор завода</h3>
                    <p>Управляй производством поршневых и газотурбинных двигателей внутреннего сгорания. Настраивай конвейеры, оптимизируй процессы</p>
                </div>
                <div class="card">
                    <div class="card-icon">🚜</div>
                    <h3>Производство техники</h3>
                    <p>Создавай машины и оборудование с ДВС для применения во всех стихиях: от огненных двигателей до водных судов</p>
                </div>
                <div class="card">
                    <div class="card-icon">🎮</div>
                    <h3>Idle-tycoon механика</h3>
                    <p>Автоматическое производство, апгрейды оборудования, расширение ассортимента. Строй империю двигателестроения!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Стихии -->
    <section class="section" id="elements">
        <div class="container">
            <h2 class="section-title">4 стихии применения ДВС</h2>
            <div class="cards-grid">
                <div class="card" style="border-color: #DC3545;">
                    <div class="card-icon">🔥</div>
                    <h3 style="color: #DC3545;">Огонь</h3>
                    <p>Сами двигатели внутреннего сгорания — сердце любой техники. Поршневые и газотурбинные ДВС всех классов</p>
                    <ul style="text-align: left; color: var(--color-text-gray); margin-top: 1rem;">
                        <li>• Автомобильные двигатели</li>
                        <li>• Мотоциклетные ДВС</li>
                        <li>• Промышленные моторы</li>
                    </ul>
                </div>
                <div class="card" style="border-color: #8B4513;">
                    <div class="card-icon">🌍</div>
                    <h3 style="color: #CD853F;">Земля</h3>
                    <p>Карьерная, дорожно-строительная, сельскохозяйственная и лесохозяйственная техника</p>
                    <ul style="text-align: left; color: var(--color-text-gray); margin-top: 1rem;">
                        <li>• Экскаваторы и бульдозеры</li>
                        <li>• Тракторы и комбайны</li>
                        <li>• Ж/д и путевая техника</li>
                        <li>• Насосные и генераторные установки</li>
                    </ul>
                </div>
                <div class="card" style="border-color: #1E90FF;">
                    <div class="card-icon">💧</div>
                    <h3 style="color: #1E90FF;">Вода</h3>
                    <p>Суда и корабли всех типов — от катеров до океанских лайнеров</p>
                    <ul style="text-align: left; color: var(--color-text-gray); margin-top: 1rem;">
                        <li>• Речные суда</li>
                        <li>• Морские корабли</li>
                        <li>• Катера и яхты</li>
                    </ul>
                </div>
                <div class="card" style="border-color: #87CEEB;">
                    <div class="card-icon">💨</div>
                    <h3 style="color: #87CEEB;">Воздух</h3>
                    <p>Летательные аппараты — БПЛА, самолёты, вертолёты</p>
                    <ul style="text-align: left; color: var(--color-text-gray); margin-top: 1rem;">
                        <li>• Беспилотники (БПЛА)</li>
                        <li>• Самолёты гражданской авиации</li>
                        <li>• Вертолёты</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Как играть -->
    <section class="section" style="background: var(--bg-secondary);">
        <div class="container">
            <h2 class="section-title">Как играть?</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Построй завод</h3>
                    <p>Размести цеха по производству двигателей, настрой конвейерные линии</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Производи ДВС</h3>
                    <p>Запусти производство поршневых и газотурбинных двигателей</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Создавай технику</h3>
                    <p>Используй двигатели для производства машин по 4 стихиям</p>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Расширяй империю</h3>
                    <p>Открывай новые цеха, исследуй технологии, стань магнатом двигателестроения!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Тарифы -->
    <section class="section" id="pricing">
        <div class="container">
            <h2 class="section-title">Тарифы</h2>
            <div class="pricing-grid pricing-grid-5">
                <div class="pricing-card">
                    <h3>Бесплатно</h3>
                    <div class="price">0 ₽</div>
                    <div class="period">навсегда</div>
                    <ul>
                        <li>Цех поршневых двигателей</li>
                        <li>Стихия Огонь (базовая)</li>
                        <li>Базовые апгрейды</li>
                    </ul>
                    <a href="/register.php" class="btn btn-outline">Начать играть</a>
                </div>
                <div class="pricing-card">
                    <h3>Лайт</h3>
                    <div class="price">8 ₽</div>
                    <div class="period">в месяц</div>
                    <ul>
                        <li>Стихия Земля</li>
                        <li>Карьерная техника</li>
                        <li>Сельхозтехника</li>
                        <li>+2 цеха</li>
                    </ul>
                    <a href="/premium.php" class="btn btn-outline">Выбрать</a>
                </div>
                <div class="pricing-card">
                    <h3>Лайт+</h3>
                    <div class="price">88 ₽</div>
                    <div class="period">в месяц</div>
                    <ul>
                        <li>Стихии Вода + Воздух</li>
                        <li>Судостроительный цех</li>
                        <li>Авиационный цех</li>
                        <li>БПЛА и вертолёты</li>
                    </ul>
                    <a href="/premium.php" class="btn btn-outline">Выбрать</a>
                </div>
                <div class="pricing-card featured">
                    <span class="badge">Популярный</span>
                    <h3>Премиум</h3>
                    <div class="price">888 ₽</div>
                    <div class="period">в месяц</div>
                    <ul>
                        <li>Все 4 стихии</li>
                        <li>Газотурбинные двигатели</li>
                        <li>Лидерборд</li>
                        <li>Приоритетная поддержка</li>
                    </ul>
                    <a href="/premium.php" class="btn btn-primary">Выбрать</a>
                </div>
                <div class="pricing-card">
                    <h3>Навсегда</h3>
                    <div class="price">8 888 ₽</div>
                    <div class="period">одна оплата</div>
                    <ul>
                        <li>Всё из Премиума навсегда</li>
                        <li>Ранний доступ к новинкам</li>
                        <li>Эксклюзивные модели ДВС</li>
                        <li>VIP-статус</li>
                    </ul>
                    <a href="/premium.php" class="btn btn-outline">Выбрать</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Дорожная карта -->
    <section class="section" id="roadmap" style="background: var(--bg-secondary);">
        <div class="container">
            <h2 class="section-title">Дорожная карта</h2>
            <div class="roadmap-timeline">
                <div class="roadmap-item">
                    <div class="roadmap-marker active">🏭</div>
                    <h4>Этап 1 — Сейчас (2026)</h4>
                    <p>Браузерный idle-симулятор завода ДВС, 4 стихии применения, система апгрейдов</p>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-marker">🏆</div>
                    <h4>Этап 2 — Q3 2026</h4>
                    <p>Мультиплеер — турниры между производителями, рейтинги, корпоративные лиги</p>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-marker">📚</div>
                    <h4>Этап 3 — Q4 2026</h4>
                    <p>Образовательный модуль — устройство ДВС, интеграция с техническими вузами</p>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-marker">📱</div>
                    <h4>Этап 4 — 2027</h4>
                    <p>Мобильное приложение iOS + Android, AR-режим просмотра двигателей</p>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-marker">🏢</div>
                    <h4>Этап 5 — 2027+</h4>
                    <p>B2B-платформа для автопроизводителей — корпоративные симуляторы</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-links">
                <a href="/game.php">Играть</a>
                <a href="/premium.php">Премиум</a>
                <a href="/login.php">Войти</a>
                <a href="mailto:info@fecoplay.ru">info@fecoplay.ru</a>
            </div>
            <p class="footer-copy">© FECO Play 2026. ФабрикаДВС. Все права защищены.</p>
            <p class="footer-copy" style="margin-top: 0.5rem; font-size: 10px; color: #1B1B1B;">Если ты это читаешь — ты уже инженер-двигателист</p>
        </div>
    </footer>
</body>
</html>
