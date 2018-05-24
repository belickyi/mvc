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
            <div class="header-top__list-social"><a href="#"><img src="images/instagram.png" alt=""></a><a href="#"><img src="images/facebook.png" alt=""></a><a href="#"><img src="images/vk.png" alt=""></a><a href="#"><img src="images/whatsapp.png" alt=""></a></div>
            <div class="header-top__list-enter"><a href="">Регистрация</a><a href="">Вход</a><a href="">Корзина</a><span>0</span></div>
          </div>
        </div>
        <div class="wrap header-middle">
          <div class="header-middle__logo flex-column"><a href="index.html"><img src="images/logo.png" alt="Online print"></a><span>Полиграфический онлайн сервис</span></div>
          <div class="header-middle__text flex-column"><a href=""><span>Нижний Новгород</span></a><span class="header-middle__text-description">Выберите свой город для <br>отображения актуальной стоимости</span></div>
          <div class="header-middle__btn"><a class="btn btn-info" href="#open-modal">Заказ в 1 клик</a>
            <div class="modal-window" id="open-modal">
              <div><a class="modal-close" href="#modal-close" tittle="Close">Закрыть</a>
                <div class="feedback">
                  <form action="feedback">
                    <label for="1">Ваш телефон</label>
                    <input type="text" name="Tiraz" id="1">
                    <label for="1">Ваш email</label>
                    <input type="text" name="Tiraz" id="1">
                    <label for="1">Дополнительня информация</label>
                    <input type="text" name="Tiraz" id="1">
                    <input class="btn btn-cta" type="submit" value="Отправить заказ">
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="header-middle__contacts flex-column"><span class="header-middle__contacts-tel">+ 7 (831) 123-45-67</span><a class="btn-link-orange" href="#">заказать обратный звонок</a><span>время работы: круглосуточно</span></div>
        </div>
        <div class="header-bottom">
          <nav class="wrap">
            <ul class="flex-row flex-space">
              <li class="header-bottom__products"><a class="btn btn-link-dark" href="calc.html">Продукция и услуги</a>
                <ul>
                  <li><a href="">Пункт № 1</a></li>
                  <li><a href="">Пункт № 2</a></li>
                  <li><a href="">Пункт № 3</a></li>
                  <li><a href="">Пункт № 4</a></li>
                  <li><a href="">Пункт № 5</a></li>
                  <li><a href="">Пункт № 6</a></li>
                  <li><a href="">Пункт № 7</a></li>
                  <li><a href="">Пункт № 8</a></li>
                </ul>
              </li>
              <li><a class="btn btn-link-dark" href="/calc">Онлайн калькулятор</a></li>
              <li><a class="btn btn-link-dark" href="">Проверка макета</a></li>
              <li class="header-bottom__info"><a class="btn btn-link-dark" href="">Информация</a>
                <ul>
                  <li><a class="btn btn-link-dark" href="textrebovania.html">Технические требования</a></li>
                  <li><a class="btn btn-link-dark" href="contacts.html">Контакты</a></li>
                  <li><a class="btn btn-link-dark" href="akcii.html">Акции</a></li>
                  <li><a class="btn btn-link-dark" href="paydelevery.html">Оплата и доставка</a></li>
                  <li><a class="btn btn-link-dark" href="uslugi.html">Дополнительные услуги</a></li>
                  <li><a class="btn btn-link-dark" href="aboutus.html">О нас</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- content -->
      <?php include 'application/views/'.$content_view; ?>
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