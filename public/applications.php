<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Grooming salon</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>

  <div id="container">

    <header class="header">

      <div class="logo">
        <div class="logo-text__first">Groomming</div>
        <div class="logo-text__second">Service for dogs and cats</div>
      </div>

      <nav class="nav">
        <p><a class="nav-btn" href="index.html">Главная</a>
        <a class="nav-btn" href="application.html">Заявки</a>  <a class="nav-btn" href="autorisation.html">Кабинет</a></p>
      </nav>

    </header>

    <content class="content">

      <div class="app">

        <div class="app-left">
          <h2 class="app-left__title">Мои заявки</h2>
          <div class="app-left__app">

            <div class="app-windows">
              <img src="img/pet/cat.jpg" class="app-window-img" alt="">
              <div class="app-window-text__block">
                <h3 class="app">Заявка №1</h3>
              </div>
            </div>

            <div class="app-windows">
              <img src="img/pet/cat2.jpg" class="app-window-img" alt="">
              <div class="app-window-text__block">
                <h3 class="app">Заявка №1</h3>
              </div>
            </div>

            <div class="app-windows">
              <img src="img/pet/cat.jpg" class="app-window-img" alt="">
              <div class="app-window-text__block">
                <h3 class="app">Заявка №1</h3>
              </div>
            </div>

          </div>
        </div>

        <div class="app-right">
          <img src="img/pet/pet.png" class="app-right-pets" alt="">
          <form action="" class="app-form">

            <p class="app-title">Создайте заявку</p>

            <input type="text" class="app-input" placeholder="Текстовое поле">
            <input type="text" class="app-input" placeholder="Текстовое поле">
            <button class="app-button" type="submit">Записаться</button>

          </form>
        </div>

      </div>
    </content>

    <footer class="footer">
      <div class="footer-title">groom-salon.com 2000-2999</div>
    </footer>

  </div>

  <script src="js/vue.min.js"></script>

  <script src="js/script.js"></script>

</body>
</html>