<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

    <header class="header">
        <div class="container header-top">
          <div class="logo">
            <a href="index.php">
              <img src="../../pictures/logo.png" alt="Логотип ЭлВий">
            </a>
            <span class="slogan">Культура объединяет,<br>знания возвышают</span>
          </div>
          <div class="socials">
            <a href="features"><img src="../../pictures/vk.svg" alt="VK"></a>
            <a href="#"><img src="../../pictures/ok.svg" alt="OK"></a>
            <a href="#"><img src="../../pictures/tg.svg" alt="Telegram"></a>
          </div>
          <?php
            if(isset($_COOKIE['hash_numb'])){
              echo '<a  href="../../profile/call/">
              <img src="../../pictures/logo.png" alt="Cabinet"></a>';
            }
            else {
              echo '<div class="auth">
            <div class="registr">
              <div class="btn-overlay">
                <a href="../../login/call/index.php?tab=register">
                  <img src="../../pictures/reg.svg" alt="Регистрация">
                  <span class="btn-text light">Регистрация</span>
                </a>
              </div>
            </div>
            <div class="login">
              <div class="btn-overlay">
                <a href="../../login/call/index.php?tab=login">
                  <img src="../../pictures/login.svg" alt="Вход">
                  <span class="btn-text dark">Вход</span>
                </a>
              </div>
            </div>
          </div>';
            }
          ?>
        </div>
        <nav class="nav">
          <ul>
            <li><a href="#welcome">О проекте</a></li>
            <li><a href="#topics">Этно школа</a></li>
            <li><a href="#advantages">Наши преимущества</a></li>
            <li><a href="#">Турниры</a></li>
            <li><a href="#">Копилка знаний</a></li>
            <li><a href="#">Отзывы</a></li>
          </ul>
        </nav>
      </header>
      
      <section class="hero">
        <div class="container hero-content">
          <div class="text">
            <h1>ЭлВий – путешествие в мир марийской культуры: <br>интерактивные уроки для детей</h1>
            <p>Станьте частью большого приключения!</p>
            <div class="form-wrapper">
                <div class="input-box">
                  <img src="../../pictures/pole-vvod.svg" alt="">
                  <input type="text" placeholder="+7">
                </div>
                <div class="button-box">
                  <img src="../../pictures/demo-dostup.svg" alt="">
                  <button class="btn dark">Получить демо-доступ</button>
                </div>
              </div>
          </div>
        <div class="mascot-wrapper">
        <div class="figures">
            <img src="../../pictures/figures.svg" alt="Фигуры">
        </div>
          <div class="mascot">
            <img src="../../pictures/elviy.png" alt="ЭлВий">
          </div>
        </div>
        </div>
      </section>

      <section class="features">
        <div class="container features-grid">
          <div class="feature">
            <img src="../../pictures/house.svg" alt="Доступно">
            <p>Доступно</p>
          </div>
          <div class="feature">
            <img src="../../pictures/wand.svg" alt="Полезно">
            <p>Полезно</p>
          </div>
          <div class="feature">
            <img src="../../pictures/calendar.svg" alt="Не выходя из дома">
            <p>Не выходя из дома</p>
          </div>
          <div class="feature">
            <img src="../../pictures/video.svg" alt="В любое удобное время">
            <p>В любое удобное время</p>
          </div>
        </div>
      </section>

      <section id="welcome" class="welcome">
        <h1>Добро пожаловать в ЭлВий!</h1>
      
        <div class="content-wrapper">
          <div class="olenenok2">
            <div class="figure-wrapper2">
              <img class="figures2" src="../../pictures/figures2.svg" alt="Фигуры">
              <img class="mascot2" src="../../pictures/olen2.svg" alt="Олень">
            </div>
            <div class="card1">
            <div class="card">Участвуя в увлекательных турнирах, сможет проверить свои знания и посоревноваться с ровесниками</div>
            <div class="card">Из копилки знаний извлечет дополнительные сведения, интересные факты, углубляя свои познания и расширяя горизонты</div>
            </div>
          </div>

          <div class="text-side">
            <p class="intro">ЭлВий – уникальное интерактивное образовательное пространство, направленное на сохранение и популяризацию языка, культуры марийского народа</p>
            <div class="card2"> 
            <div class="card">Мы объединили новейшие технологии и традиционные ценности, чтобы сделать обучение увлекательным и доступным</div>
            <div class="card">Обучаясь в этно школе, ребенок погрузится в удивительный мир марийской культуры и искусства, познакомится с особенностями народа с языком, фольклором, традициями и обрядами</div>
            <p class="final">Присоединяйтесь к нам и помогите своему ребенку открыть двери в удивительное наследие</p>
            </div>
          </div>
        </div>
      </section>
      
      <section id="topics" class="topics">
        <h1>Изучай язык, живи культурой</h1>
        <div class="text-topic">Тематические разделы этно школы</div>
      
        <div class="cardview">
          <a href="../../familyamongnations/call/" class="topic1">
            <img src="../../pictures/temolen1.svg" alt="Тематический олень" class="temolen">
            <div class="text-wrapper">
              <p>Марий Эл в семье народов России</p>
            </div>
          </a>
      
          <a href="../../languagenation/call/" class="topic1">
            <img src="../../pictures/temolen2.svg" alt="Тематический олень" class="temolen">
            <div class="text-wrapper">
              <p>Язык моего народа</p>
            </div>
          </a>
      
          <a href="../../folkart/call/" class="topic1">
            <img src="../../pictures/temolen3.svg" alt="Тематический олень" class="temolen">
            <div class="text-wrapper">
              <p>Устное народное творчество</p>
            </div>
          </a>
      
          <a href="../../holidays/call/" class="topic1">
            <img src="../../pictures/temolen4.svg" alt="Тематический олень" class="temolen">
            <div class="text-wrapper">
              <p>Праздники</p>
            </div>
          </a>
      
          <a href="../../nationalcuisine/call/" class="topic1">
            <img src="../../pictures/temolen5.svg" alt="Тематический олень" class="temolen">
            <div class="text-wrapper">
              <p>Национальная кухня</p>
            </div>
          </a>
      
          <a href="../../musicculture/call/" class="topic1">
            <img src="../../pictures/temolen6.svg" alt="Тематический олень" class="temolen">
            <div class="text-wrapper">
              <p>Музыкальная культура</p>
            </div>
          </a>
        </div>
      </section>

      <section id="advantages" class="advantages">
        <h1>Оптимальное решение для тех, кто выбирает счастливое будущее</h1>
        <div class="advcard-container">
      
          <div class="advcard">
            <div class="advcard-header">
              <img src="../../pictures/ornament.svg" alt="Орнамент">
              <h1>Глубокое погружение в марийскую культуру</h1>
            </div>
            <p>Проект охватывает различные аспекты культуры: язык, традиции и обряды, фольклор, национальную одежду и кухню, позволяя детям всесторонне изучить наследие своего народа</p>
          </div>
      
          <div class="advcard">
            <div class="advcard-header">
              <img src="../../pictures/graf.svg" alt="График">
              <h1>Увлекательная форма обучения</h1>
            </div>
            <p>Использование интерактивных элементов (игры, головоломки, ребусы, викторины) делает процесс обучения интересным и мотивирующим для детей</p>
          </div>
      
          <div class="advcard">
            <div class="advcard-header">
              <img src="../../pictures/pentagramma.svg" alt="Пентаграмма знаний">
              <h1>Эффективная методика закрепления знаний</h1>
            </div>
            <p>Трехэтапная система обучения (погружение, практика, закрепление) обеспечивает прочное усвоение материала</p>
          </div>
      
          <div class="advcard">
            <div class="advcard-header">
              <img src="../../pictures/pencil.svg" alt="Карандаш">
              <h1>Развитие творческих способностей</h1>
            </div>
            <p>Творческие задания и проекты стимулируют воображение и способствуют самовыражению детей</p>
          </div>
      
        </div>
      </section>

      <section class="audio-reviews">
        <h2>Родители и педагоги отмечают захватывающее содержание и эффективность методик</h2>
      
        <div class="audio-list">
          <div class="audio-item">
            <p class="audio-text">text</p>
            <div class="audio-player">
              <div class="play-wrapper">
                <img src="../../pictures/rectangle.svg" alt="фон кнопки" class="play-bg">
                <button class="play-button">&#9658;</button>
              </div>
              <div class="progress-line"></div>
              <span class="audio-time">00:23</span>
            </div>
          </div>
      
          <div class="audio-item">
            <p class="audio-text">text</p>
            <div class="audio-player">
              <div class="play-wrapper">
                <img src="../../pictures/rectangle.svg" alt="фон кнопки" class="play-bg">
                <button class="play-button">&#9658;</button>
              </div>
              <div class="progress-line"></div>
              <span class="audio-time">00:52</span>
            </div>
          </div>
      
          <div class="audio-item">
            <p class="audio-text">text</p>
            <div class="audio-player">
              <div class="play-wrapper">
                <img src="../../pictures/rectangle.svg" alt="фон кнопки" class="play-bg">
                <button class="play-button">&#9658;</button>
              </div>
              <div class="progress-line"></div>
              <span class="audio-time">00:36</span>
            </div>
          </div>
      
          <div class="audio-item">
            <p class="audio-text">text</p>
            <div class="audio-player">
              <div class="play-wrapper">
                <img src="../../pictures/rectangle.svg" alt="фон кнопки" class="play-bg">
                <button class="play-button">&#9658;</button>
              </div>
              <div class="progress-line"></div>
              <span class="audio-time">00:21</span>
            </div>
          </div>
        </div>
      </section>

      <section class="subscription-block">
        <div class="subscription-container">
        <div class="content">
          <h1>
            <span class="highlight">Откройте мир</span> знаний<br> 
            своему ребенку
          </h1>
          <p class="subtitle">Пусть старт в образовании пройдет без стресса и скуки</p>
          <div class="button-wrapper">
            <img src="../../pictures/Rectangle2.svg" alt="Rectangle background" class="button-bg">
            <button class="subscribe-button">Подписка</button>
          </div>
        </div>
      
        <div class="illustration">
          <img src="../../pictures/figures3.svg" alt="Background figures" class="figures3">
          <img src="../../pictures/olen3.svg" alt="Olen character" class="olen">
        </div>
        </div>
      </section>

      <footer class="footer">
        <div class="footer-container">
          <div class="footer-left">
            <p class="footer-email">
              <img src="../../pictures/email.svg" alt="Email Icon" class="email-icon">
              mari.marsu@mail.ru
            </p>
            <p>ФГБОУ ВО “Марийский государственный университет”</p>
            <p>© ЭлВий, 2025</p>
          </div>
          <div class="footer-right">
            <div class="social-icon">
              <img src="../../pictures/vk2.svg" alt="VK">
            </div>
            <div class="social-icon">
              <img src="../../pictures/tg2.svg" alt="WhatsApp">
            </div>
            <div class="social-icon">
              <img src="../../pictures/ok2.svg" alt="Telegram">
            </div>
          </div>
        </div>
      </footer>
</body>
</html>