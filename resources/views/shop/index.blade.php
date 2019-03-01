@extends('layout-shop')

@section('title_description', 'Biotic - Продукты долголетия')

@section('meta_description', 'Торговая компания “Biotic” специализируется на продаже высококачественных, натуральных продуктов для здоровья и красоты. Оптово-розничные продажи БАДов, витаминов, трав, спортивного питания, натуральной пищи, ароматов, средств для гигиены и ухода.')

@section('head')

@endsection


@section('content')
  <!-- CAROUSEL -->
  <section id="carouselIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/shop/bg.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="white">Травы и Чаи</h2>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/shop/bg.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="white">Lorem ipsum dolor</h2>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </section>

  <!-- ADVANTAGES -->
  <section class="pt-3 pb-3">
    <div class="container">
      <div class="row text-center">
        <div class="col-6 col-sm-3">
          <div class="fz-48 color">
            <i class="icon-drop"></i>
          </div>
          <h5 class="fw-400">Натуральные продукты</h5>
        </div>
        <div class="col-6 col-sm-3">
          <div class="fz-48 color">
            <i class="icon-doc"></i>
          </div>
          <h5 class="fw-400">Сертифицированные продукты</h5>
        </div>
        <div class="col-6 col-sm-3">
          <div class="fz-48 color">
            <i class="icon-plane"></i>
          </div>
          <h5 class="fw-400">Бесплатная доставка от 15000 тг</h5>
        </div>
        <div class="col-6 col-sm-3">
          <div class="fz-48 color">
            <i class="icon-earphones-alt"></i>
          </div>
          <h5 class="fw-400">Онлайн консультация 24/7</h5>
        </div>
      </div>
    </div>
  </section>

  <!-- CATEGORIES -->
  <section class="pt-3 pb-3">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="category-item">
            <div class="cat-wrapper">
              <a href="#">
                <div class="cat-thumbnail">
                  <img src="img/categories/cate_538x340.jpg" alt="" />
                </div>
                <div class="cat-content">
                  <div class="inner">
                    <h6 class="cat-title">Косметика</h6>
                    <div class="cat-count">( 12 items )</div>
                  </div>
                </div>
              </a>
            </div>
          </div><br>
        </div>
        <div class="col-sm-4">
          <div class="category-item">
            <div class="cat-wrapper">
              <a href="#">
                <div class="cat-thumbnail">
                  <img src="img/categories/cate_538x340.jpg" alt="" />
                </div>
                <div class="cat-content">
                  <div class="inner">
                    <h6 class="cat-title">Витамины</h6>
                    <div class="cat-count">( 8 items )</div>
                  </div>
                </div>
              </a>
            </div>
          </div><br>
        </div>
        <div class="col-sm-4">
          <div class="category-item">
            <div class="cat-wrapper">
              <a href="#">
                <div class="cat-thumbnail">
                  <img src="img/categories/cate_538x340.jpg" alt="" />
                </div>
                <div class="cat-content">
                  <div class="inner">
                    <h6 class="cat-title">Спортивное питание</h6>
                    <div class="cat-count">( 5 items )</div>
                  </div>
                </div>
              </a>
            </div>
          </div><br>
        </div>
      </div>
    </div>
  </section>

  <!-- POPULAR PRODUCTS -->
  <section class="pt-3 pb-3">
    <div class="container">
      <h4 class="text-uppercase text-center mb-3">Популярные продукты</h4>
      <div class="row">
        <div class="col-sm-3 col-6">
          <div class="product-item shadow-sm pb-2">
            <div class="product-thumbnail">
              <a href="/product">
                <div class="badges">
                  <span class="sale">Sale</span>
                </div>
                <img src="img/shop/paste-bank.png" alt="">
              </a>
              <div class="actions">
                <button onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
              </div>
            </div>
            <div class="product-info">
              <a class="silver fz-14" href="#">Category</a>
              <a href="/product">
                <h2 class="product-title">Lounge Chair</h2>
                <div class="price">7999〒</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-6">
          <div class="product-item shadow-sm pb-2">
            <div class="product-thumbnail">
              <a href="/product">
                <div class="badges">
                  <span class="sale">Sale</span>
                </div>
                <img src="img/shop/capsule.png" alt="">
              </a>
              <div class="actions">
                <button onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
              </div>
            </div>
            <div class="product-info">
              <a class="silver fz-14" href="#">Category</a>
              <a href="/product">
                <h2 class="product-title">Picture Light</h2>
                <div class="price">6999〒</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-6">
          <div class="product-item shadow-sm pb-2">
            <div class="product-thumbnail">
              <a href="/product">
                <div class="badges">
                  <span class="sale">Sale</span>
                </div>
                <img src="img/shop/banka-1-kg.png" alt="">
              </a>
              <div class="actions">
                <button onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
              </div>
            </div>
            <div class="product-info">
              <a class="silver fz-14" href="#">Category</a>
              <a href="/product">
                <h2 class="product-title">Pink Chandelier</h2>
                <div class="price">6999〒</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-6">
          <div class="product-item shadow-sm pb-2">
            <div class="product-thumbnail">
              <a href="/product">
                <div class="badges">
                  <span class="new">New</span>
                </div>
                <img src="img/shop/banka-3kg.png" alt="">
              </a>
              <div class="actions">
                <button onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
              </div>
            </div>
            <div class="product-info">
              <a class="silver fz-14" href="#">Category</a>
              <a href="/product">
                <h2 class="product-title">Storage Unit</h2>
                <div class="price">4999〒</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-6">
          <div class="product-item shadow-sm pb-2">
            <div class="product-thumbnail">
              <a href="/product">
                <div class="badges">
                  <span class="sale">Sale</span>
                </div>
                <img src="img/shop/paste-bank.png" alt="">
              </a>
              <div class="actions">
                <button onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
              </div>
            </div>
            <div class="product-info">
              <a class="silver fz-14" href="#">Category</a>
              <a href="/product">
                <h2 class="product-title">Lounge Chair</h2>
                <div class="price">7999〒</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-6">
          <div class="product-item shadow-sm pb-2">
            <div class="product-thumbnail">
              <a href="/product">
                <div class="badges">
                  <span class="sale">Sale</span>
                </div>
                <img src="img/shop/capsule.png" alt="">
              </a>
              <div class="actions">
                <button onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
              </div>
            </div>
            <div class="product-info">
              <a class="silver fz-14" href="#">Category</a>
              <a href="/product">
                <h2 class="product-title">Picture Light</h2>
                <div class="price">6999〒</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-6">
          <div class="product-item shadow-sm pb-2">
            <div class="product-thumbnail">
              <a href="/product">
                <div class="badges">
                  <span class="sale">Sale</span>
                </div>
                <img src="img/shop/banka-1-kg.png" alt="">
              </a>
              <div class="actions">
                <button onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
              </div>
            </div>
            <div class="product-info">
              <a class="silver fz-14" href="#">Category</a>
              <a href="/product">
                <h2 class="product-title">Pink Chandelier</h2>
                <div class="price">6999〒</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-6">
          <div class="product-item shadow-sm pb-2">
            <div class="product-thumbnail">
              <a href="/product">
                <div class="badges">
                  <span class="new">New</span>
                </div>
                <img src="img/shop/banka-3kg.png" alt="">
              </a>
              <div class="actions">

                  <a class="button style-flat button-xs button-secondary" href="#">Оформить</a>
                <!-- <button onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button> -->
              </div>
            </div>
            <div class="product-info">
              <a class="silver fz-14" href="#">Category</a>
              <a href="/product">
                <h2 class="product-title">Storage Unit</h2>
                <div class="price">4999〒</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- NEW PRODUCTS -->
  <section class="pt-3 pb-3">
    <div class="container">
      <h4 class="text-uppercase text-center mb-3">Новые продукты</h4>
      <div class="row">
        <div class="col-sm-3 col-6">
          <div class="product-item shadow-sm pb-2">
            <div class="product-thumbnail">
              <a href="/product">
                <div class="badges">
                  <span class="sale">Sale</span>
                </div>
                <img src="img/shop/paste-bank.png" alt="">
              </a>
              <div class="actions">
                <button onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
              </div>
            </div>
            <div class="product-info">
              <a class="silver fz-14" href="#">Category</a>
              <a href="/product">
                <h2 class="product-title">Lounge Chair</h2>
                <div class="price">7999〒</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-6">
          <div class="product-item shadow-sm pb-2">
            <div class="product-thumbnail">
              <a href="/product">
                <div class="badges">
                  <span class="sale">Sale</span>
                </div>
                <img src="img/shop/capsule.png" alt="">
              </a>
              <div class="actions">
                <button onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
              </div>
            </div>
            <div class="product-info">
              <a class="silver fz-14" href="#">Category</a>
              <a href="/product">
                <h2 class="product-title">Picture Light</h2>
                <div class="price">6999〒</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-6">
          <div class="product-item shadow-sm pb-2">
            <div class="product-thumbnail">
              <a href="/product">
                <div class="badges">
                  <span class="sale">Sale</span>
                </div>
                <img src="img/shop/banka-1-kg.png" alt="">
              </a>
              <div class="actions">
                <button onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
              </div>
            </div>
            <div class="product-info">
              <a class="silver fz-14" href="#">Category</a>
              <a href="/product">
                <h2 class="product-title">Pink Chandelier</h2>
                <div class="price">6999〒</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-6">
          <div class="product-item shadow-sm pb-2">
            <div class="product-thumbnail">
              <a href="/product">
                <div class="badges">
                  <span class="new">New</span>
                </div>
                <img src="img/shop/banka-3kg.png" alt="">
              </a>
              <div class="actions">
                <button onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
              </div>
            </div>
            <div class="product-info">
              <a class="silver fz-14" href="#">Category</a>
              <a href="/product">
                <h2 class="product-title">Storage Unit</h2>
                <div class="price">4999〒</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-6">
          <div class="product-item shadow-sm pb-2">
            <div class="product-thumbnail">
              <a href="/product">
                <div class="badges">
                  <span class="sale">Sale</span>
                </div>
                <img src="img/shop/paste-bank.png" alt="">
              </a>
              <div class="actions">
                <button onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
              </div>
            </div>
            <div class="product-info">
              <a class="silver fz-14" href="#">Category</a>
              <a href="/product">
                <h2 class="product-title">Lounge Chair</h2>
                <div class="price">7999〒</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-6">
          <div class="product-item shadow-sm pb-2">
            <div class="product-thumbnail">
              <a href="/product">
                <div class="badges">
                  <span class="sale">Sale</span>
                </div>
                <img src="img/shop/capsule.png" alt="">
              </a>
              <div class="actions">
                <button onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
              </div>
            </div>
            <div class="product-info">
              <a class="silver fz-14" href="#">Category</a>
              <a href="/product">
                <h2 class="product-title">Picture Light</h2>
                <div class="price">6999〒</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-6">
          <div class="product-item shadow-sm pb-2">
            <div class="product-thumbnail">
              <a href="/product">
                <div class="badges">
                  <span class="sale">Sale</span>
                </div>
                <img src="img/shop/banka-1-kg.png" alt="">
              </a>
              <div class="actions">
                <button onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
              </div>
            </div>
            <div class="product-info">
              <a class="silver fz-14" href="#">Category</a>
              <a href="/product">
                <h2 class="product-title">Pink Chandelier</h2>
                <div class="price">6999〒</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-6">
          <div class="product-item shadow-sm pb-2">
            <div class="product-thumbnail">
              <a href="/product">
                <div class="badges">
                  <span class="new">New</span>
                </div>
                <img src="img/shop/banka-3kg.png" alt="">
              </a>
              <div class="actions">

                  <a class="button style-flat button-xs button-secondary" href="#">Оформить</a>
                <!-- <button onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button> -->
              </div>
            </div>
            <div class="product-info">
              <a class="silver fz-14" href="#">Category</a>
              <a href="/product">
                <h2 class="product-title">Storage Unit</h2>
                <div class="price">4999〒</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
  <script>
    function addToCart(i) {
      var productId = $(i).data("cart-id");
      $('*[data-cart-id="'+productId+'"]').replaceWith('<a href="/cart" class="button style-flat button-xs button-secondary">Go to cart</a>');
      $('#count-items').text(2);
      console.log(productId);
            // alert('Товар добавлен в корзину');
      $('#modalCart').modal('show');
      exit();

      if (productId != '') {
        $.ajax({
          type: "get",
          // url: '/add-to-cart/'+productId,
          dataType: "json",
          data: {},
          success: function(data) {
            $('*[data-cart-id="'+productId+'"]').replaceWith('<a href="/cart" class="button style-flat button-xs button-secondary" href="#">Go to cart</a>');
            $('#count-items').text(data.countItems);

            alert('Товар добавлен в корзину');
          }
        });
      } else {
        alert("Ошибка сервера");
      }
    }
  </script>
@endsection
