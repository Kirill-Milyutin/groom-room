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
        <a class="nav-btn" href="application.html">Вход</a></p>
      </nav>
    </header>
    <content class="content">
      <div class="app">
        <div class="app-left">
          <h2 class="app-left__title">Профессиональная укладка<br> для ваших домашних <br> питомцев</h2> 
        </div>
        <div class="app-right">
          <img src="img/pet/pet.png" class="app-right-pets" alt="">
          <form action="" class="app-form">
            <p class="app-right__title">Создайте заявку</p>
            <input type="text" class="app-input" v-bind:value="valueInputName" v-on:input="inputName" v-on:keypress.enter="applicationForm" :placeholder="placeholderName">
            <input type="text" class="app-input" v-bind:value="valueInputService" v-on:input="inputService" v-on:keypress.enter="applicationForm" :placeholder="placeholderService">
            <button class="app-button" type="button" v-on:click="applicationForm">Записаться</button>
          </form>
        </div>
      </div>
      <div class="shop">
        <h3 class="shop-title">Наши работы</h3>
        <div class="shop-row">
          <div class="shop-row-window" v-for="myServices in services">
            <img :src="myServices.url" alt="" class="window-image">
            <div class="window-title">{{myServices.name}}</div>

            <select>
              <option><div class="window-category">Запись на: 
                <b>{{myServices.service}}</b></div>
              </option>
            </select>

            <div class="window-status">{{myServices.condition}}</div>
          </div>
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