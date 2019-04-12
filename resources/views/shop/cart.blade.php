@extends('layout-shop')

@section('title_description', 'Biotic - Продукты долголетия')

@section('meta_description', 'Торговая компания “Biotic” специализируется на продаже высококачественных, натуральных продуктов для здоровья и красоты. Оптово-розничные продажи БАДов, витаминов, трав, спортивного питания, натуральной пищи, ароматов, средств для гигиены и ухода.')

@section('head')

@endsection


@section('content')
  <section class="page-title-bar">
    <div class="page-title-bar-overlay"></div>
    <div class="page-title-bar-inner">
      <div class="container">
        <div class="row row-xs-center">
          <div class="col-md-12">
            <div id="page-breadcrumb" class="page-breadcrumb text-left">
              <ul class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li class="sub tail current">Корзина</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section pt-6 pb-6">
    <div class="container">
      @if ($products->count() > 0)
        <h3 class="text-center mb-4">Оформление заказа</h3>
        <h4 class="text-right"><a href="/clear-cart">Очистить корзину?</a></h4>

        <form action="/store-order" method="post">
          {!! csrf_field() !!}

          <?php $items = session('items'); ?>
          @foreach ($products as $product)
            <div class="row m-0 border border-top-0 pt-1 pb-1">                  
              <div class="col-4 col-sm-4 col-md-1">
                <a href="/product/{{ $product->slug }}" class="d-inline-block"><img class="ml-1" style="width: 100px;" src="/img/products/{{ $product->path.'/'.$product->image }}"></a>
              </div>
              <div class="col-8 col-sm-8 col-md-5">
                <h5 class="mt-1">{{ $product->title }}</h5>
                <b class="secondary-color">{{ $product->price }}〒</b>
              </div>
              <div class="col-7 col-sm-6 col-md-3">
                <div class="quantity mt-1 text-right">
                  <div class="noo-quantity-attr text-nowrap">
                    <button type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if (!isNaN(qty) && qty > 1) qty_el.value--; return false;">-</button>
                    <input id="qty" type="text" name="quantity" value="{{ $items['products_id'][$product->id]['quantity'] }}" class="input-text qty text pl-0 pr-0" size="4" />
                    <button type="button" class="qty-increase" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if (!isNaN(qty)) qty_el.value++; return false;">+</button>
                  </div>
                </div>
              </div>
              <div class="col-5 col-sm-6 col-md-3">
                <div class="text-center">
                  <span class="amount fz-22 secondary-color">{{ ($product->price * $items['products_id'][$product->id]['quantity']) }}〒</span>
                  <a href="/destroy-from-cart/{{ $product->id }}" class="fz-24 -d-inline-block" onclick="return confirm('Удалить запись?')">&times;</a>
                </div>
              </div>
            </div>
          @endforeach


          <div class="row mt-3">
            <div class="col-md-12 pb-3">
              <div class="card rounded-0">
                <div class="checkout card-body">
                  <h4>Получатель</h4>
                  <div class="form-checkout">
                    <div class="row">
                      <div class="col-md-4 mb-2">
                        <input type="text" name="name" id="name" placeholder="ФИО" value="{{ old('name') }}" minlength="2" maxlength="40" required>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input type="tel" name="phone" id="phone" placeholder="Номер телефона" value="{{ old('phone') }}" minlength="5" maxlength="20" required>
                      </div>
                      <div class="col-md-4 mb-2">
                        <input type="email" placeholder="Email *" name="email" id="email" value="{{ old('email') }}" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 mt-2 mb-2">
                        <!-- <label for="city">Укажите город</label> -->
                        <select name="city" id="city" required>
                          <option value="">-Укажите город-</option>
                          @foreach($countries as $country)
                            <optgroup label="{{ $country->title }}">
                              @foreach($country->cities as $city)
                                <option value="{{ $city->id }}">{{ $city->title }}</option>
                              @endforeach
                            </optgroup>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-md-4 mb-2-">
                        <input type="text" name="address" id="address" placeholder="Адрес" value="{{ old('address') }}" required>
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
              <div class="card rounded-0 jumbotron-">
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
        </form>
      @else
        <h3 class="text-center">Корзина пуста</h3>
        <p class="text-center"><a href="/" class="btn btn-lg btn-primary">Перейти к покупкам</a></p>
      @endif
    </div>
  </section>
@endsection


@section('scripts')

@endsection
