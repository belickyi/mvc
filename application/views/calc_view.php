<aside class="sidebar">
          <div class="sidebar-menu"><span class="menu-name">Вся продукция</span><a class="sidebar-menu__i" href="card.html"><span class="menu__item-caption">Визитки</span><img src="images/id-card.png" alt=""></a><a class="sidebar-menu__i" href="listovki.html"><span class="menu__item-caption">Листовки</span><img src="images/flyer.png" alt=""></a><a class="sidebar-menu__i" href="buklet.html"><span class="menu__item-caption">Буклеты</span><img src="images/buklet.png" alt=""></a><a class="sidebar-menu__i" href="plakat.html"><span class="menu__item-caption">Плакаты</span><img src="images/poster.png" alt=""></a><a class="sidebar-menu__i" href="kalendari.html"><span class="menu__item-caption">Календари</span><img src="images/calendar.png" alt=""></a><a class="sidebar-menu__i" href="broshura.html"><span class="menu__item-caption">Брошюры</span><img src="images/brochure.png" alt=""></a><a class="sidebar-menu__i" href="book.html"><span class="menu__item-caption">Книги</span><img src="images/book.png" alt=""></a><a class="sidebar-menu__i" href="pechati.html"><span class="menu__item-caption">Изготовление печатей</span><img src="images/stamp.png" alt=""></a></div>
          <div class="sidebar-state">
            <p>Узнать состояние заказа</p>
            <form>
              <input type="text">
            </form>
          </div>
          <div class="sidebar-fastorder"><a href="#"><img src="images/download.png" alt="download"></a>
            <p>Загрузить файлы<br> для срочного заказа</p>
          </div>
          <div class="sidebar-news">
            <h3>Новости</h3>
            <h4>20 апреля</h4>
            <p>В Online print началась сезонная распродажа</p>
            <h4>18 марта</h4>
            <p>Мы победили в конкурсе на лучшую типографию Нижнего Новгорода!</p>
            <h4>5 марта</h4>
            <p>Скидки девушкам в честь 8 марта до 50%!</p>
            <h4>22 февраля</h4>
            <p>Скидки мужчинам в честь 23 февраля до 50%!</p>
            <h4>15 января</h4>
            <p>Действует дополнительная скидка на комплексные заказы!</p><a href="#">Все новости</a>
          </div>
        </aside>
        <section class="section">
          <h1 class="titleficha">Печать тиражей – расчет стоимости онлайн</h1>
          <h2>Хотите узнать цену на печать тиражей онлайн? Наш калькулятор по вашим параметрам, позволит максимально точно рассчитать цену на тираж.</h2>
          <div class="section-list">
            <div class="section-calk__param">
              <h2>Листовая продукция</h2>
              <form action="calculator.php" method="post">
                <div class="form-wrap">
                  <div class="form-i">
                    <label for="1">Тираж</label>
                    <input type="text" name="Tiraz" id="1">
                  </div>
                </div>
                <div class="form-wrap">
                  <div class="form-i">
                    <label for="2">Формат изделия</label>
                    <select name="format" id="2">
                      <option value="">A1 (594*841мм)</option>
                      <option value="">A2 (420*594мм)</option>
                      <option value="">A3 (297*420мм)</option>
                      <option value="">A4 (210*297мм)</option>
                      <option value="">A5 (148*210мм)</option>
                      <option value="">A6 (105*158мм)</option>
                      <option value="">Флаер (99*210мм)</option>
                    </select>
                  </div>
                </div>
                <div class="form-wrap">
                  <div class="form-i">
                    <label for="3">Бумага</label>
                    <select name="papper" id="3">
                      <option value="">Офсетная 80г. (тонкая, как в принтере)</option>
                      <option value="">Мелованная 130г. (тонкая. как у листовок)</option>
                      <option value="">Мелованная 150г. (чуть толще)</option>
                      <option value="">Мелованная 170г. (поплотнее)</option>
                      <option value="">Мелованная 200г. (плотная)</option>
                      <option value="">Мелованная 250г. (еще плотнее)</option>
                      <option value="">Мелованная 300г. (самая плотная)</option>
                      <option value="">Картон 310гр. (как у визиток)</option>
                      <option value="">Самоклейка 80г.</option>
                    </select>
                  </div>
                </div>
                <div class="form-wrap">
                  <div class="form-i">
                    <label for="4">Цветность</label>
                    <select name="color" id="4">
                      <option value="">1+0 (черно-белая, односторонняя)</option>
                      <option value="">1+1 (черно-белая, двусторонняя)</option>
                      <option value="">4+0 (цветная, односторонняя)</option>
                      <option value="">4+4 (цветная, двусторонняя)</option>
                    </select>
                  </div>
                </div>
                <div class="form-wrap">
                  <div class="form-i">
                    <label for="5">Ламинация</label>
                    <select name="laminazia" id="5">
                      <option value="">Нет</option>
                      <option value="">Глянцевая 30мк. (односторонняя)</option>
                      <option value="">Глянцевая 30мк. (двухсторонняя)</option>
                      <option value="">Матовая 30мк. (односторонняя)</option>
                      <option value="">Матовая 30мк. (двухсторонняя)</option>
                      <option value="">Софт-тач 30мк. (матовая, односторонняя, с эффектом резины)</option>
                      <option value="">Матовая 30мк. (матовая, двухсторонняя, с эффектом резины)</option>
                    </select>
                  </div>
                </div>
                <div class="form-wrap">
                  <div class="form-i">
                    <label for="6">Кругление углов</label>
                    <select name="Kruglenie" id="6">
                      <option value="">Нет</option>
                      <option value="">1 угол</option>
                      <option value="">2 угола</option>
                      <option value="">3 угола</option>
                      <option value="">4 угола</option>
                    </select>
                  </div>
                </div>
                <div class="form-wrap">
                  <div class="form-i">
                    <label for="7">Биговка</label>
                    <select name="big" id="7">
                      <option value="">Нет</option>
                      <option value="">1 биг</option>
                      <option value="">2 бига</option>
                      <option value="">3 бига</option>
                      <option value="">4 бига</option>
                    </select>
                  </div>
                </div>
                <div class="form-wrap">
                  <div class="form-i">
                    <label for="8">Фальц</label>
                    <select name="falz" id="8">
                      <option value="">Нет</option>
                      <option value="">1 фальц</option>
                      <option value="">2 фальца</option>
                      <option value="">3 фальца</option>
                      <option value="">4 фальца</option>
                    </select>
                  </div>
                </div>
                <div class="form-wrap">
                  <div class="form-i"><span>Стоимость заказа 0 &#8381</span></div>
                </div>
                <div class="form-wrap">
                  <div class="form-i__btn">
                    <input type="submit" value="Отправить заказ">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- <div class="section-morelist">
            <div class="section-calk__param">
              <h2>Многостраничная продукция</h2>
              <form action="calculator.php" method="post">
                <div class="form-wrap">
                  <div class="form-i">
                    <label for="1">Тираж</label>
                    <input type="text" name="Tiraz" id="1">
                  </div>
                </div>
              </form>
            </div> -->
          </div>
        </section>
      </div>
    </div>
