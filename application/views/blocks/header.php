<header class="header">
  <div class="headertop">
    <div class="wrap">
      <div class="headertop__social flex-space">
        <div class="social"><a class="social__link" href="#"><img class="social__pic" src="/images/vk.png" alt="vk"></a><a class="social__link" href="#"><img class="social__pic" src="/images/instagram.png" alt="instagram"></a><a class="social__link" href="#"><img class="social__pic" src="/images/facebook.png" alt="facebook"></a><a class="social__link" href="#"><img class="social__pic" src="/images/whatsapp.png" alt="whatsapp"></a></div>
        <div class="headertop__enter">
        <? if (empty($_SESSION['login']) or empty($_SESSION['id'])) { ?>
          <a class="headertop__list cursor" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Регистрация</a>
          <!-- modal signup-->
          <div class="modal" id="id01">
              <div class="signup"><span class="modal__close" onclick="document.getElementById('id01').style.display='none'" title="Close Modal">&times</span>
                <form class="form modal__content" action="">
                  <div class="form__header signup__form-title">Регистрация</div>
                  <div class="form__footer">
                    <div class="form-row flex-column"><span class="form__error">Необходимо заполнить поле</span>
                      <label class="label" for="signup_email">Email</label>
                      <input class="input form__required" name="login" type="text" id="signup_email">
                    </div>
                    <div class="form-row flex-column"><span class="form__error">Необходимо заполнить поле</span>
                      <label class="label" for="psw">Пароль</label>
                      <input class="input form__required" name="password" type="password" id="psw">
                    </div>
                    <div class="flex-center">
                      <button class="button button_view-action form__submit">Зарегестрировать</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          <!-- modal enter-->
          <a class="headertop__list cursor" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Вход    </a>
          <div class="modal" id="id02">
            <div class="enter"><span class="modal__close" onclick="document.getElementById('id02').style.display='none'" title="Close Modal">&times</span>
              <form class="form modal__content" action="/main/enter" method='post'>
                <div class="form__header enter__form-title">Вход</div>
                <div class="form__footer">
                  <div class="form-row flex-column">
                    <label class="label" for="enter_email">Введите ваш логин</label>
                    <input class="input form__required" type="text" name='login' required>
                  </div>
                  <div class="form-row flex-column">
                    <label class="label" for="psw">Введите ваш пароль</label>
                    <input class="input form__required" type="password" name='password' required>
                  </div>
                  <div class="flex-center">
                    <button class="button button_view-action modal_btn" type="submit">Войти</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <a class="headertop__list" href="/cart">Корзина</a>
          <a class="headertop__list headertop__list-view_orange" href="#">1</a>
        </div>
        <?} else {?>
          <span style='color: #fff;'>Добро пожаловать,  <?echo($_SESSION['login']);?>!</span>
          <a class="headertop__list" href="/cart">Корзина</a>
          <a class="headertop__list headertop__list-view_orange" href="#">1</a>
        <?}?>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="headermiddle">
    <div class="wrap flex-space">
      <div class="logo headermiddle__logo"><a href="/main"><img src="images/logo.svg" alt="Online print"></a><span>Полиграфический онлайн сервис</span></div>
      <div class="headermiddle__city flex-column"><a class="link headermiddle__city-chouse" href="#">Нижний Новгород</a><span class="headermiddle__text">Выберите свой город для<br>отображения актуальной стоимости</span></div>
      <div class="headermiddle__button"><a class="button button_view-action" href="/download.html">Быстрый заказ</a></div>
      <div class="flex-column"><span class="headermiddle__tel">+7 (831) 123-45-67</span><a class="cursor headermiddle__feedback link_view-orange" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">заказать обратный звонок</a>
        <!-- feedback_modal-->
        <div class="modal" id="id03"><span class="modal__close" onclick="document.getElementById('id03').style.display='none'" title="Close Modal">&times</span>
          <div class="feedback flex-space wrap gap-vertical flex-center fadeInLeft animated wow">
            <form class="form column-4" action="">
              <div class="form__header feedback__header">Связаться с нами</div>
              <div class="form__footer">
                <div class="flex-space">
                  <div class="flex-column column-3">
                    <label class="label" for="feedback_name-modal">Ваше имя</label>
                    <input class="input feedback__width form__required" type="text" id="feedback_name-modal">
                  </div>
                  <div class="flex-column column-3">
                    <label class="label" for="feedback_email-modal">Ваш email</label>
                    <input class="input form__required" type="text" id="feedback_email-modal">
                  </div>
                </div>
                <label class="label" for="feedback_subject-modal">Тема обращения</label>
                <input class="input" type="text" id="feedback_subject-modal">
                <label class="label" for="text" name="feedback_text-modal">Текст</label>
                <textarea class="input" type="text" id="feedback_text-modal"></textarea>
                <button class="button button_view-action form__submit">Отправить</button>
              </div>
            </form>
          </div>
        </div><span class="headermiddle__time">время работы: круглосуточно</span>
      </div>
    </div>
  </div>
  <div class="headerbottom">
    <div class="wrap flex-space">
      <div class="dropdown headerbottom__dropdown">
        <div class="dropdown__button cursor" id="dropdown__active-button">ПРОДУКЦИЯ И УСЛУГИ</div>
        <div class="dropdown__content" id="dropdown__active"><span class="dropdown__popular flex-end">Популярное</span>
          <!-- Визитки-->
          <div class="dropdown__link cursor">Визитки
            <div class="dropdown-subnav">
              <h3 class="dropdown-subnav__title">Печать визиток</h3>
              <div class="flex-space">
                <div class="dropdown-subnav__col-left">
                  <form class="dropdown-subnav__form flex-column" action="calc.php" method="post"><span class="dropdown-subnav__span-size">Размер</span>
                    <select class="select" name="size">
                      <option value="0.80">90x50 мм</option>
                      <option value="0.70">85x55 мм</option>
                    </select><span class="dropdown-subnav__span-cmyk">Цветность</span>
                    <label class="dropdown-subnav__radio">
                      <input type="radio" name="cmyk" checked value="1"><span> 
                        <t>Ч/б односторонняя</t></span>
                    </label>
                    <label class="dropdown-subnav__radio">
                      <input type="radio" name="cmyk" value="1.5"><span> 
                        <t>Ч/б двухсторонняя</t></span>
                    </label>
                    <label class="dropdown-subnav__radio">
                      <input type="radio" name="cmyk" value="2"><span> 
                        <t>Цветная односторонняя</t></span>
                    </label>
                    <label class="dropdown-subnav__radio">
                      <input type="radio" name="cmyk" value="3"><span> 
                        <t>Цветная двухсторонняя</t></span>
                    </label>
                  </form>
                  <div class="dropdown-subnav__more"><a class="link" href="/calculator.html">Больше опций</a></div>
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
          <!-- Листовки-->
          <div class="dropdown__link cursor" href="">Листовки
            <div class="dropdown-subnav">
              <h3 class="dropdown-subnav__title">Печать листовок</h3>
              <div class="flex-space">
                <div class="dropdown-subnav__col-left">
                  <form class="dropdown-subnav__form flex-column" action="calc.php" method="post"><span class="dropdown-subnav__span-size">Размер</span>
                    <select class="select" name="size"> 
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
                  <div class="dropdown-subnav__more"><a class="link" href="/calculator.html">Больше опций</a></div>
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
          <!-- Буклеты-->
          <div class="dropdown__link cursor" href="">Плакаты
            <div class="dropdown-subnav">
              <h3 class="dropdown-subnav__title">Печать плакатов</h3>
              <div class="flex-space">
                <div class="dropdown-subnav__col-left">
                  <form class="dropdown-subnav__form flex-column" action="calc.php" method="post"><span class="dropdown-subnav__span-size">Размер</span>
                    <select class="select" name="size"> 
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
                  <div class="dropdown-subnav__more"><a class="link" href="/calculator.html">Больше опций</a></div>
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
          <!-- Брошюры-->
          <div class="dropdown__link cursor" href="">Буклеты
            <div class="dropdown-subnav">
              <h3 class="dropdown-subnav__title">Печать буклетов</h3>
              <div class="flex-space">
                <div class="dropdown-subnav__col-left">
                  <form class="dropdown-subnav__form flex-column" action="calc.php" method="post"><span class="dropdown-subnav__span-size">Размер</span>
                    <select class="select" name="size"> 
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
                  <div class="dropdown-subnav__more"><a class="link" href="/calculator.html">Больше опций</a></div>
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
          <!--  Брошюры                               -->
          <div class="dropdown__link cursor" href="">Брошюры
            <div class="dropdown-subnav">
              <h3 class="dropdown-subnav__title">Печать брошюр</h3>
              <div class="flex-space">
                <div class="dropdown-subnav__col-left">
                  <form class="dropdown-subnav__form flex-column" action="calc.php" method="post"><span class="dropdown-subnav__span-size">Размер</span>
                    <select class="select" name="size"> 
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
                  <div class="dropdown-subnav__more"><a class="link" href="/calculator.html">Больше опций</a></div>
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
          </div><span class="dropdown__popular flex-end">Услуги</span>
          <div class="dropdown__link cursor" href="">Разработка дизайна</div>
          <div class="dropdown__link cursor" href="">Срочная печать</div>
        </div>
      </div>
      <div class="headerbottom__right flex-end"><a class="dropdown__button headerbottom__link" href="/calculator.html">ОНЛАЙН КАЛЬКУЛЯТОР</a><a class="dropdown__button headerbottom__link" href="/download.html">ПРОВЕРКА МАКЕТА</a>
        <div class="dropdown">
          <div class="dropdown__button cursor">ИНФОРМАЦИЯ</div>
          <div class="dropdown__content"><a class="dropdown__link" href="/login">О нас</a><a class="dropdown__link" href="/demans.html">Технические требования</a><a class="dropdown__link" href="/delevery.html">Доставка</a><a class="dropdown__link" href="/contacts.html">Контакты</a></div>
        </div>
      </div>
    </div>
  </div>
</header>