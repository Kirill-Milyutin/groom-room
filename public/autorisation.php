<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Grooming salon</title>
  <link rel="stylesheet" type="text/css" href="public/css/style.css">
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
        <a class="nav-btn" href="index.html">Главная</a> <a class="nav-btn" href="autorisation.html">Вход</a>
      </nav>

    </header>

    <content class="content">

      <div class="app">

        <div class="app-left">
          <h2 class="app-left__title">Войдите или зарегистрируйтесь<br><span class="app-small-text">Чтобы получить возможность добавить заявку</span></h2> 
        </div>

        <div class="app-right">

          <img src="img/pet/pet.png" class="app-right-pets" alt="">

          <form action="" class="app-form">

            <div class="app-form-nav">
              <div class="app-form-nav-item active-auto">Войти</div>
              <div class="app-form-nav-item">Регистрация</div>
            </div>

            <input type="email" class="app-input" v-bind:value="valueEmail" v-on:input="inputEmail" :placeholder="placeholderEmail">
            <input type="password" class="app-input" v-bind:value="valuePassword" v-on:input="inputPassword" :placeholder="placeholderPassword">
            <button class="app-button" type="button" v-on:click="consoleData">Войти</button>

          </form>

        </div>

      </div>

    </content>

    <footer class="footer">
      <div class="footer-title">groom-salon.com 2000-2999</div>
    </footer>

  </div>

  <script src="public/js/vue.min.js"></script>

  <script src="public/js/script.js"></script>

</body>
</html>