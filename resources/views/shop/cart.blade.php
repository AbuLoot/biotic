@extends('layout-shop')

@section('title_description', 'Biotic - Продукты долголетия')

@section('meta_description', 'Торговая компания “Biotic” специализируется на продаже высококачественных, натуральных продуктов для здоровья и красоты. Оптово-розничные продажи БАДов, витаминов, трав, спортивного питания, натуральной пищи, ароматов, средств для гигиены и ухода.')

@section('head')

@endsection


@section('content')

  @include('partials.breadcrumb')

  <section class="section pt-6 pb-6">
    <div class="container">
      <h3 class="text-center mb-4">Оформление заказа</h3>

      <div class="row">
        <div class="col-4 col-sm-4 col-md-2">
          <a href="/detail" class="d-inline-block"><img class="mr-1 ml-1" src="img/shop/shop_80x100.jpg" alt=""></a>
        </div>
        <div class="col-8 col-sm-8 col-md-4">
          <h5>Short skirt Short skirt  ShortskirtShortskirt</h5>
        </div>
        <div class="col-md-6 mt-1">
          <table class="table table-sm table-bordered-">
            <tbody>
              <tr scope="row">
                <td><span class="amount">10000〒</span></td>
                <td>
                  <form class="cart">
                    <div class="quantity">
                      <div class="noo-quantity-attr text-nowrap">
                        <button type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if (!isNaN(qty) && qty > 1) qty_el.value--; return false;">-</button>
                        <input id="qty" type="text" name="quantity" value="1" class="input-text qty text pl-0 pr-0" size="4" />
                        <button type="button" class="qty-increase" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if (!isNaN(qty)) qty_el.value++; return false;">+</button>
                      </div>
                    </div>
                  </form>
                </td>
                <td>
                  <span class="amount fw-bolder secondary-color">10000〒</span><br>
                  <a href="#" class="h3 d-inline-block">&times;</a>
                </td>
                <!-- <td><a href="#" class="remove" onclick="">&times;</a></td> -->
              </tr>
            </tbody>
          </table> 
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-4 col-sm-4 col-md-2">
          <a href="/detail" class="d-inline-block"><img class="mr-1 ml-1" src="img/shop/shop_80x100.jpg" alt=""></a>
        </div>
        <div class="col-8 col-sm-8 col-md-4">
          <h5>Short skirt Short skirt  ShortskirtShortskirt</h5>
        </div>
        <div class="col-md-6 mt-1">
          <table class="table table-sm table-bordered-">
            <tbody>
              <tr scope="row">
                <td><span class="amount">10000〒</span></td>
                <td>
                  <form class="cart">
                    <div class="quantity">
                      <div class="noo-quantity-attr text-nowrap">
                        <button type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if (!isNaN(qty) && qty > 1) qty_el.value--; return false;">-</button>
                        <input id="qty" type="text" name="quantity" value="1" class="input-text qty text pl-0 pr-0" size="4" />
                        <button type="button" class="qty-increase" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if (!isNaN(qty)) qty_el.value++; return false;">+</button>
                      </div>
                    </div>
                  </form>
                </td>
                <td>
                  <span class="amount fw-bolder secondary-color">10000〒</span><br>
                  <a href="#" class="h3 d-inline-block">&times;</a>
                </td>
                <!-- <td><a href="#" class="remove" onclick="">&times;</a></td> -->
              </tr>
            </tbody>
          </table> 
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-md-12 pb-3">
          <div class="card">
            <div class="checkout card-body">
              <h4>Получатель</h4>
              <div class="form-checkout">
                <div class="row">
                  <div class="col-md-4 mb-2">
                    <input type="text" id="name" placeholder="ФИО">
                  </div>
                  <div class="col-md-4 mb-2">
                    <input type="text" id="email" placeholder="Email">
                  </div>
                  <div class="col-md-4 mb-2">
                    <input type="text" id="phone" placeholder="Номер телефона">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 mt-2 mb-2">
                    <!-- <label for="city">Укажите город</label> -->
                    <select name="city" id="city" required>
                      <option value="">-Укажите город-</option>
                      <option value="">Australia</option>
                      <option value="">Brazil</option>
                      <option value="">England</option>
                      <option value="">France</option>
                      <option value="">United State</option>
                      <option value="">Vietnam</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-2-">
                    <input type="text" id="address" placeholder="Адрес">
                  </div>
                </div>
                <!-- <div class="row">
                  <div class="col-md-12 mb-2">
                    <label><input class="input-checkbox pull-left" id="createaccount" type="checkbox" name="createaccount" value="1">&nbsp;Создать аккаунт?</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <a href="#" class="button style-flat button-primary">Place Order</a>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 pb-3">
          <div class="card jumbotron-">
            <div class="card-body">
              <h4>Доставка</h4>
              <div class="custom-control custom-radio">
                <input id="credit" name="get" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Поездом через Казпочту</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="get" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Самолетом через Казпочту</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="get" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Заберу в магазине</label>
              </div>
              <hr>

              <h4>Оплата</h4>
              <div class="custom-control custom-radio">
                <input id="card" name="pay" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="card">Оплата картой (Visa, MasterCard)</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="cash" name="pay" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="cash">Наличными курьеру</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 pb-3">
          <div class="cart-totals">
            <!-- <h2 class="wg-title">Cart Totals</h2> -->
            <table>
              <tbody>
                <tr class="cart-subtotal">
                  <th>Сумма</th>
                  <td>$116.00</td>
                </tr>
                <tr class="shipping">
                  <th>Доставка</th>
                  <td>Free Shipping</td>
                </tr>
                <tr class="order-total">
                  <th>Сумма с доставкой</th>
                  <td><strong>$146.00</strong></td>
                </tr>
              </tbody>
            </table>
            <div class="proceed-to-checkout">
              <a href="#" class="button style-flat button-secondary">Proceed to Checkout</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
      </div>
    </div>
  </section>
@endsection


@section('scripts')

@endsection
