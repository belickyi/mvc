<header class="header">
  <div class="headertop">
    <div class="wrap">
      <div class="headertop__social flex-space">
        <div class="social"><a class="social__link" href="#"><img class="social__pic" src="/images/vk.png" alt="vk"></a><a class="social__link" href="#"><img class="social__pic" src="/images/instagram.png" alt="instagram"></a><a class="social__link" href="#"><img class="social__pic" src="/images/facebook.png" alt="facebook"></a><a class="social__link" href="#"><img class="social__pic" src="/images/whatsapp.png" alt="whatsapp"></a></div>
        <div class="headertop__enter"><a class="headertop__list" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Регистрация</a>
          <!--modal signup-->
          <div class="modal" id="id01"><span class="modal__close" onclick="document.getElementById('id01').style.display='none'" title="Close Modal">&times</span>
            <form class="modal__content" action="save_user.php" method = "post">
              <div class="modal__container flex-column">
                <h1>Регистрация</h1>
                <hr>
                <label for="login">Имя</label>
                <input type="text" placeholder="Введите ваше имя" name="login" required>
                <label for="password">Пароль</label>
                <input type="password" placeholder="Введите пароль" name="password" required>
                <div class="flex-space">
                  <button class="button button_view-info modal__button" type="button" onclick="document.getElementById('id01').style.display='none'">Отменить</button>
                  <button class="button button_view-action modal__button" type="submit">Зарегестрировать</button>
                </div>
              </div>
            </form>
          </div><a class="headertop__list" href="#">Вход</a><a class="headertop__list" href="#">Корзина</a><a class="headertop__list headertop__list-view_orange" href="#">0</a>
        </div>
      </div>
    </div>
  </div>
  <div class="headermiddle">
    <div class="wrap flex-space">
      <div class="logo headermiddle__logo"><a href="/main"><img src="images/logo.svg" alt="Online print"></a><span>Полиграфический онлайн сервис</span></div>
      <div class="headermiddle__city flex-column"><a class="link headermiddle__city-chouse" href="#">Нижний Новгород</a><span class="headermiddle__text">Выберите свой город для<br>отображения актуальной стоимости</span></div>
      <div class="headermiddle__button"><a class="button button_view-action" href="#">Быстрый заказ</a></div>
      <div class="flex-column"><span class="headermiddle__tel">+7 (831) 123-45-67</span><a class="headermiddle__feedback link_view-orange" href="#">заказать обратный звонок</a><span class="headermiddle__time">время работы: круглосуточно</span></div>
    </div>
  </div>
  <div class="headerbottom">
    <div class="wrap flex-space">
      <div class="dropdown headerbottom__dropdown">
        <div class="dropdown__button">ПРОДУКЦИЯ И УСЛУГИ</div>
        <div class="dropdown__content"><span class="dropdown__popular flex-end">Популярное</span>
          <div class="dropdown__link">Визитки
            <div class="dropdown-subnav">
              <h3 class="dropdown-subnav__title">Печать визиток</h3>
              <div class="flex-space">
                <div class="dropdown-subnav__col-left">
                  <form class="dropdown-subnav__form flex-column" action="calc.php" method="post"><span class="dropdown-subnav__span-size">Размер</span>
                    <select name="size"> 
                      <option value="90x50">90x50 мм</option>
                      <option value="90x50">85x55 мм</option>
                    </select><span class="dropdown-subnav__span-cmyk">Цветность</span>
                    <label class="dropdown-subnav__radio">
                      <input type="radio" name="cmyk" checked><span> 
                        <t>Ч/б односторонняя</t></span>
                    </label>
                    <label class="dropdown-subnav__radio">
                      <input type="radio" name="cmyk"><span> 
                        <t>Ч/б двухсторонняя</t></span>
                    </label>
                    <label class="dropdown-subnav__radio">
                      <input type="radio" name="cmyk"><span> 
                        <t>Цветная односторонняя</t></span>
                    </label>
                    <label class="dropdown-subnav__radio">
                      <input type="radio" name="cmyk"><span> 
                        <t>Цветная двухсторонняя</t></span>
                    </label>
                  </form>
                  <div class="dropdown-subnav__more"><a class="link" href="#">Больше опций</a></div>
                </div>
                <div class="dropdown-subnav__col-right">
                  <table>
                    <tr>
                      <th><span>Количество</span></th>
                      <th><span>Цена</span></th>
                    </tr>
                    <tr>
                      <td><span>100 шт.</span></td>
                      <td><span>390</span></td>
                      <td><a class="button button_view-action dropdown-subnav__view-button" href="#"><img src="/images/shopping.png" alt="shopping"></a></td>
                    </tr>
                    <tr>
                      <td><span>200 шт.</span></td>
                      <td><span>540</span></td>
                      <td><a class="button button_view-action dropdown-subnav__view-button" href="#"><img src="/images/shopping.png" alt="shopping"></a></td>
                    </tr>
                    <tr>
                      <td><span>300 шт.</span></td>
                      <td><span>690</span></td>
                      <td><a class="button button_view-action dropdown-subnav__view-button" href="#"><img src="/images/shopping.png" alt="shopping"></a></td>
                    </tr>
                    <tr>
                      <td><span>500 шт.</span></td>
                      <td><span>1300</span></td>
                      <td><a class="button button_view-action dropdown-subnav__view-button" href="#"><img src="/images/shopping.png" alt="shopping"></a></td>
                    </tr>
                    <tr>
                      <td><span>1000 шт.</span></td>
                      <td><span>1600</span></td>
                      <td><a class="button button_view-action dropdown-subnav__view-button" href="#"><img src="/images/shopping.png" alt="shopping"></a></td>
                    </tr>
                    <tr>
                      <td><span>2000 шт.</span></td>
                      <td><span>2400</span></td>
                      <td><a class="button button_view-action dropdown-subnav__view-button" href="#"><img src="/images/shopping.png" alt="shopping"></a></td>
                    </tr>
                    <tr>
                      <td><span>5000 шт.</span></td>
                      <td><span>5500</span></td>
                      <td><a class="button button_view-action dropdown-subnav__view-button" href="#"><img src="/images/shopping.png" alt="shopping"></a></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="dropdown__link" href="">Листовки</div>
          <div class="dropdown__link" href="">Плакаты</div>
          <div class="dropdown__link" href="">Буклеты</div>
          <div class="dropdown__link" href="">Брошюры</div><span class="dropdown__popular flex-end">Услуги</span>
          <div class="dropdown__link" href="">Разработка дизайна</div>
          <div class="dropdown__link" href="">Срочная печать</div>
        </div>
      </div>
      <div class="headerbottom__right flex-end"><a class="dropdown__button headerbottom__link" href="/calculator.html">ОНЛАЙН КАЛЬКУЛЯТОР</a><a class="dropdown__button headerbottom__link" href="/download.html">ПРОВЕРКА МАКЕТА</a>
        <div class="dropdown">
          <div class="dropdown__button">ИНФОРМАЦИЯ</div>
          <div class="dropdown__content"><a class="dropdown__link" href="/about.html">О нас</a><a class="dropdown__link" href="/demans.html">Технические требования</a><a class="dropdown__link" href="/delevery.html">Доставка</a><a class="dropdown__link" href="/contacts.html">Контакты</a></div>
        </div>
      </div>
    </div>
  </div>
</header>