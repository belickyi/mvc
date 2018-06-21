<!-- stepControl-->
<div class="stepControl wrap flex-start gap-vertical">
  <div class="stepControl__step1"><img class="stepControl__img" src="images/stepControl/basket.png" alt="basket">Корзина</div>
  <div class="stepControl__step2"><img class="stepControl__img" src="images/stepControl/listing.png" alt="basket">Вход/Регистрация</div>
  <div class="stepControl__step3"><img class="stepControl__img" src="images/stepControl/shipped.png" alt="basket">Доставка</div>
  <div class="stepControl__step4"><img class="stepControl__img" src="images/stepControl/piggybank.png" alt="basket">Оплата	</div>
</div>
<!-- formProduct-->
<form class="formProduct wrap">
  <div class="formProduct__header">
    <table class="formProduct__table-header">
      <thead class="formProduct__thead">
        <tr>
          <th class="formProduct__thead-decribe">
              Описание</th>
          <th class="formProduct__thead-price">
              Цена</th>
          <th class="formProduct__thead-sum">
              Сумма</th>
          <th class="formProduct__thead-action">Действие</th>
        </tr>
      </thead>
      <tbody class="formProduct__tbody">
        <tr>
          <th class="formProduct__tbody-decribe">
            <div class="flex-start"><img class="formProduct__img" src="/images/plakat.png" alt="product">
              <div class="flex-column"><span class="formProduct__name">Плакат</span><span class="formProduct__volum">Количество 500 шт.</span></div>
            </div>
          </th>
          <th class="formProduct__tbody-price">500</th>
          <th class="formProduct__tbody-sum">1500</th>
          <th class="formProduct__tbody-action">x</th>
        </tr>
      </tbody>
    </table>
    <table class="formProduct__table-footer">
      <tbody class="formProduct__tbody">
        <tr>
          <th class="formProduct__tbody-decribeTotal"></th>
          <th class="formProduct__tbody-priceTotal">500</th>
          <th class="formProduct__tbody-sumTotal">1500</th>
          <th class="formProduct__tbody-actionTotal"></th>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="flex-end">
    <div class="formProduct__footer">
      <div class="formProduct__footer-span flex-space"><span>Всего:</span><span>500 &#8381</span></div>
      <div class="flex-end">
        <div class="button button_view-action formProduct__footer-btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Зарегестрироваться и заказать</div>
        <div class="button button_view-info formProduct__footer-btn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Войти и заказать</div>
      </div>
    </div>
  </div>
  <div class="formProduct__footer"></div>
</form>