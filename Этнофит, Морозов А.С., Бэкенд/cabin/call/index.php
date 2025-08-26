<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Личный кабинет</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <a href="/" class="logo-link">
      <img class="logo" src="../../images/logo.png" alt="Логотип">
    </a>
    <nav>
      <a href="../../mainpage/call/">Главная</a>
      <a href="#about">О проекте</a>
      <a href="#subscription">О подписке</a>
      <a href="#calculator">Калькулятор</a>
      <a href="#register">Контакты</a>
    </nav>
    <form method="POST" action="../script/">
        <input class="logout-btn" type="submit" value="Выход"/>
    </form>
  </header>

  <main class="container">
    <form method="POST" action="../script_add/">
    <section id="calculator" class="section calculator">
      <div class="section-title">Внести данные</div>
      <p>Инструкция: введите ваши параметры.</p>
      <label for="weight">Масса</label>
      <input name="weight" type="number" id="weight" placeholder="кг" />

      <label for="height">Рост</label>
      <input name="height" type="number" id="height" placeholder="см" />

      <label for="chest">Длина</label>
      <input name="body" type="number" id="body" placeholder="туловище (см)" />
      <input name="arm" type="number" id="arm" placeholder="рука (см)" />
      <input name="foot" type="number" id="foot" placeholder="нога (см)" />

      <label for="waist">Ширина</label>
      <input name="shoulders" type="number" id="shoulders" placeholder="плечи(см)" />
      <input name="pelvis" type="number" id="pelvis" placeholder="таз(см)" />
      <button class="logout-btn" type="submit">Внести</button>
    </section>
    </form>

    <?php
        $conn = @new mysqli("localhost", "root", "mysql", "students_etnofit");
        $stud_id = $_COOKIE['hash_check'];
        $sql = "SELECT * FROM `student_info` WHERE `hash` = '$stud_id'";
        $result = mysqli_query($conn, "SELECT somatotype FROM student_info WHERE `hash` = '$stud_id'");
        $ST_ch = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        $result = mysqli_query($conn, "SELECT IMT FROM student_info WHERE `hash` = '$stud_id'");
        $IMT = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        echo '    <div class="result-box">
        <div class="section-title">Результаты</div>
        <table class="result-table">
          <thead>
            <tr>
              <th>Соматотип</th>
              <th>ИМТ</th>
              <th>Черепной индекс</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td id="somatotype">'.$ST_ch['somatotype'].'</td>
              <td id="bmi">'.$IMT['IMT'].'</td>
              <td id="skull-index">NaH</td>
            </tr>
          </tbody>
        </table>
      </div>';
    ?>
     <section class="section food-diary">
      <div class="section-title">Дневник питания</div>
      <table class="food-table">
        <thead>
          <tr>
            <th>Приём пищи</th>
            <th>Калории</th>
            <th>Белки</th>
            <th>Жиры</th>
            <th>Углеводы</th>
            <th>Время</th>
            <th>Вода</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Завтрак</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
          <tr><td>2-й завтрак</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
          <tr><td>Обед</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
          <tr><td>Полдник</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
          <tr><td>Ужин</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
          <tr><td>2-й ужин</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
          <tr><td>Перекус</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        </tbody>
        <tfoot>
          <tr class="diary-total">
            <td><strong>Итого за день</strong></td>
            <td>0</td><td>0</td><td>0</td><td>0</td><td></td><td></td>
          </tr>
        </tfoot>
      </table>
    </section>
    
    <section class="section add-product">
      <h2 class="section-title">Добавление продукта в рацион</h2>
    
      <div class="product-tabs">
        <button class="tab active" data-tab="search"><span class="icon">🔍</span> Поиск</button>
        <button class="tab" data-tab="my-products"><span class="icon">👤</span> Мои продукты</button>
        <button class="tab" data-tab="favorites"><span class="icon">⭐</span> Избранное</button>
        <button class="tab" data-tab="recent"><span class="icon">🕒</span> Недавнее</button>
      </div>
    
      <div class="tab-content active" id="tab-search">
        <div class="product-filter">
          <label for="product-name">Название продукта</label>
          <input type="text" id="product-name" placeholder="Введите название продукта...">
          <button class="calculate-btn">Поиск</button>
        </div>
      </div>
    
      <div class="tab-content" id="tab-my-products">
        <p>Здесь будет список ваших продуктов.</p>
      </div>
    
      <div class="tab-content" id="tab-favorites">
        <p>Здесь будет список избранного.</p>
      </div>
    
      <div class="tab-content" id="tab-recent">
        <p>Здесь будет список недавних продуктов.</p>
      </div>
    </section>

  </main>

  <footer>
    &copy; 2025 Этнофит. Все права защищены.
  </footer>
  <script>
    const tabs = document.querySelectorAll('.product-tabs .tab');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        tabs.forEach(t => t.classList.remove('active'));
        contents.forEach(c => c.classList.remove('active'));

        tab.classList.add('active');
        const target = tab.dataset.tab;
        document.getElementById(`tab-${target}`).classList.add('active');
      });
    });
  </script>
</body>
</html>