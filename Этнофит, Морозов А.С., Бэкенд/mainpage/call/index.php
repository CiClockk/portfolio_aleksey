<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Этнофит</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <a href="/" class="logo-link">
      <img class="logo" src="../../images/logo.png" alt="Логотип">
    </a>
    <nav>
      <a href="#about">О проекте</a>
      <a href="#subscription">О подписке</a>
      <a href="#calculator">Калькулятор</a>
      <a href="#register">Контакты</a>
    </nav>
    <?php
        if(isset($_COOKIE['hash_numb'])){
            echo '<a class = "cabinet-btn" href="../../cabin/call/">Кабинет</a>';
        }
        else {
            echo '<a class = "login-btn" href="../../login/call/">Войти</a>';
        }
      ?>
  </header>

  <main class="container">
    <section id="about" class="section padd">
      <div class="section-title">Описание проекта</div>
      <p class="description">Краткое описание проекта: зачем он нужен, для кого и как работает.</p>
    </section>

    <section id="subscription" class="section">
      <div class="features">
        <div class="feature-box">
          <div class="section-title">Плюсы бесплатной подписки</div>
          <ul>
            <li>Доступ к базовым функциям</li>
            <li>Просмотр ограниченного контента</li>
            <li>Участие в открытых мероприятиях</li>
          </ul>
        </div>
        <div class="feature-box">
          <div class="section-title">Преимущества платной подписки</div>
          <ul>
            <li>Расширенный функционал</li>
            <li>Персонализированные рекомендации</li>
            <li>Приоритетная поддержка</li>
          </ul>
        </div>
      </div>
    </section>

    <section id="calculator" class="section calculator">
      <div class="section-title">Калькулятор</div>
      <p>Инструкция: введите ваши параметры.</p>
      <label for="weight">Вес</label>
      <input type="text" id="weight" placeholder="кг" />

      <label for="height">Рост</label>
      <input type="text" id="height" placeholder="см" />

      <label for="chest">Охват</label>
      <input type="text" id="chest" placeholder="см" />

      <label for="waist">Обхват</label>
      <input type="text" id="waist" placeholder="см"/>

      <button type="button" class="calculate-btn">Рассчитать</button>

      <div class="result">Ваш результат: <em>Зарегистрируйтесь / Войдите, чтобы посмотреть</em></div>
    </section>

    <section class="section reviews">
      <div class="section-title">Отзывы</div>
      <p>Здесь будут отзывы пользователей.</p>
    </section>
A
    <section id="contacts" class="section contacts">
      <div class="section-title">Контакты</div>
      <p>Email: info@ethnofit.ru</p>
      <p>Телефон: +7 (999) 999-99-99</p>
    </section>
  </main>

  <footer>
    &copy; 2025 Этнофит. Все права защищены.
  </footer>
</body>
</html>