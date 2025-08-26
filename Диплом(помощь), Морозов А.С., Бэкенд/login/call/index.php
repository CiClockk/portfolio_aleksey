<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Вход | Этнофит</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <header class="header">
        <div class="container header-top">
          <div class="logo">
            <a href="../../home/call/">
              <img src="../../pictures/logo.png" alt="Логотип ЭлВий">
            </a>
            <span class="slogan">Культура объединяет,<br>знания возвышают</span>
          </div>
          <div class="socials">
            <a href="features"><img src="../../pictures/vk.svg" alt="VK"></a>
            <a href="#"><img src="../../pictures/ok.svg" alt="OK"></a>
            <a href="#"><img src="../../pictures/tg.svg" alt="Telegram"></a>
          </div>
          <div class="auth">
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
          </div>
        </div>
    <nav class="nav">
      <ul>
        <li><a href="../../home/call/#welcome">О проекте</a></li>
        <li><a href="../../home/call/#topics">Этно школа</a></li>
        <li><a href="../../home/call/#advantages">Наши преимущества</a></li>
        <li><a href="../../home/call/#tournaments">Турниры</a></li>
        <li><a href="../../home/call/#knowledge">Копилка знаний</a></li>
        <li><a href="../../home/call/#reviews">Отзывы</a></li>
      </ul>
    </nav>
  </header>

      <main class="login-wrapper">
        <section class="auth-section">
        <div class="auth-box">
            <div class="auth-tabs">
            <button class="auth-tab auth-active" onclick="switchTab('login')">Вход</button>
            <button class="auth-tab" onclick="switchTab('register')">Регистрация</button>
            </div>

            <form action="../script/script.php" method="post" id="auth-login" class="auth-form auth-active">
            <input name="stud_log" type="text" placeholder="Имя пользователя" required />
            <input name="stud_pass" type="password" placeholder="Пароль" required />
            <button type="submit" disabled>Войти</button>
            <a href="#" class="auth-forgot">Я забыл пароль</a>
            </form>

            <form action="../script_add/script_add.php" method="post" id="auth-register" class="auth-form">
            <input name="stud_log_new" type="text" placeholder="Имя пользователя" required />
            <input name="stud_email" type="email" placeholder="Email" required />
            <input name="stud_pass_new" type="password" placeholder="Пароль" required />
            <button type="submit" disabled>Зарегистрироваться</button>
            </form>
        </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-container">
          <div class="footer-left">
            <p class="footer-email">
              <img src="pictures/email.svg" alt="Email Icon" class="email-icon">
              mari.marsu@mail.ru
            </p>
            <p>ФГБОУ ВО “Марийский государственный университет”</p>
            <p>© ЭлВий, 2025</p>
          </div>
          <div class="footer-right">
            <div class="social-icon">
              <img src="pictures/vk2.svg" alt="VK">
            </div>
            <div class="social-icon">
              <img src="pictures/tg2.svg" alt="WhatsApp">
            </div>
            <div class="social-icon">
              <img src="pictures/ok2.svg" alt="Telegram">
            </div>
          </div>
        </div>
      </footer>

      <script>
        function switchTab(tab) {
          const tabs = document.querySelectorAll('.auth-tab');
          const forms = document.querySelectorAll('.auth-form');
          tabs.forEach(tabEl => tabEl.classList.remove('auth-active'));
          forms.forEach(form => form.classList.remove('auth-active'));
    
          if (tab === 'login') {
              tabs[0].classList.add('auth-active');
              document.getElementById('auth-login').classList.add('auth-active');
          } else {
              tabs[1].classList.add('auth-active');
              document.getElementById('auth-register').classList.add('auth-active');
          }
        }
    
        const loginForm = document.getElementById('auth-login');
        const loginInputs = loginForm.querySelectorAll('input');
        const loginBtn = loginForm.querySelector('button');
    
        loginInputs.forEach(input => {
          input.addEventListener('input', () => {
            const filled = [...loginInputs].every(i => i.value.trim() !== '');
            loginBtn.disabled = !filled;
          });
        });
    
        const registerForm = document.getElementById('auth-register');
        const registerInputs = registerForm.querySelectorAll('input');
        const registerBtn = registerForm.querySelector('button');
    
        registerInputs.forEach(input => {
          input.addEventListener('input', () => {
            const filled = [...registerInputs].every(i => i.value.trim() !== '');
            registerBtn.disabled = !filled;
          });
        });
    
        // НОВЫЙ КОД
        window.addEventListener('DOMContentLoaded', () => {
          const params = new URLSearchParams(window.location.search);
          const tab = params.get('tab');
          if (tab) {
            switchTab(tab);
          }
        });
    </script>
</body>
</html>