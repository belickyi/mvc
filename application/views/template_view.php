<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1180">
    <title>Типография онлайн "Online print"</title>
    <!--css-->
    <link rel="stylesheet" href="css/style.min.css">
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700&amp;amp;subset=cyrillic" rel="stylesheet">
  </head>
  <script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
  <body>
    <div class="page">
      <!--header-->
      <div class="header">
        <div class="header-top">
          <div class="wrap header-top__list">
            <ul>
              <li><a href="#">Регистрация</a></li>
              <li><a href="">Вход</a></li>
              <li><a href="">Корзина</a></li>
              <li><a href="">0</a></li>
            </ul>
          </div>
        </div>
        <div class="wrap header-middle">
          <div class="header-middle__logo"><a href="index.html"><img src="images/logo.png" alt="Online print"></a></div>
          <div class="header-middle__text">
            <p>Круглосуточная онлайн <br>типография</p>
          </div>
          <div class="header-middle__btn btn"><a href="#">Онлайн калькулятор</a></div>
          <div class="header-middle__contacts">
            <p class="header-middle__contacts-tel">+7 (831) 123-45-67</p><a href="#">заказать обратный звонок</a>
            <p>время работы: круглосуточно</p>
          </div>
        </div>
        <div class="header-bottom">
          <ul class="wrap header-bottom__list">
            <li><a href="aboutus.html">О нас</a></li>
            <li><a href="calc.html">Онлайн калькулятор</a></li>
            <li><a href="uslugi.html">Дополнительные услуги</a></li>
            <li><a href="paydelevery.html">Оплата и доставка</a></li>
            <li><a href="akcii.html">Акции</a></li>
            <li><a href="contacts.html">Контакты</a></li>
            <li><a href="textrebovania.html">Технические требования</a></li>
          </ul>
        </div>
      </div>
      <!-- content -->
	  <div class="wrap content">
		  <?php include 'application/views/'.$content_view; ?>
	  </div>
      <!-- footer-->
      <div class="footer">
        <div class="wrap footer-wrap">
          <div class="footer-wrap__kontacts footer-wrap__i"><a href="#">Контакты</a>
            <ul>
              <li><img src="images/phone.png" alt="phone"><span>+7 (831) 123-45-67</span></li>
              <li><img src="images/massage.png" alt="phone"><span>onlineprint@mail.ru</span></li>
              <li><img src="images/placeholder.png" alt="phone"><span>г. Нижний Новгород,<br><t>ул. Нижегородская, д.8, стр.5</span></li>
              <li>
                <Copyright>© 2018 onlineprint.ru</Copyright>
              </li>
            </ul>
          </div>
          <div class="footer-wrap__uslugi footer-wrap__i">
            <div class="link"><a href="#">Популярные услуги<br></a></div><a href="#">Печать листовок и визиток, </a><a href="#">печать плакатов, </a><a href="#">печать книг и брошюр, </a><a href="#">разработка дизайна, </a><a href="#">доставка, </a><a href="#123">печать в ночное время суток(срочная печать)</a>
          </div>
          <div class="footer-wrap__logo footer-wrap__i">
            <div class="footer-wrap__logo-logotip"><a href="#"><img src="images/logo_white.png" alt="Online print"></a></div>
            <div class="footer-wrap__logo-social"><a href="#"><img src="images/vk.png" alt=""></a><a href="#"><img src="images/instagram.png" alt=""></a><a href="#"><img src="images/facebook.png" alt=""></a><a href="#"><img src="images/whatsapp.png" alt=""></a><a href="#"><img src="images/youtube.png" alt=""></a></div>
          </div>
        </div>
      </div>
    </div>
    <!--scripts-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>