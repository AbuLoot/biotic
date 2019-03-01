@extends('layout-shop')

@section('title_description', 'Biotic - Продукты долголетия')

@section('meta_description', 'Торговая компания “Biotic” специализируется на продаже высококачественных, натуральных продуктов для здоровья и красоты. Оптово-розничные продажи БАДов, витаминов, трав, спортивного питания, натуральной пищи, ароматов, средств для гигиены и ухода.')

@section('head')

@endsection


@section('content')
  <section class="page-title-bar page-title-bar-02">
    <div class="page-title-bar-overlay"></div>
    <div class="page-title-bar-inner">
      <div class="container">
        <div class="row row-xs-center">
          <div class="col-md-6">
            <div class="page-title-bar-heading">
              <h1 class="heading">Shop</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div id="page-breadcrumb" class="page-breadcrumb">
              <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="sub tail current">Catalog</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section pt-6 pb-6">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 order-lg-last order-sm-first">
          <div class="shop-filter row">
            <div class="col-md-6">
              <form class="commerce-ordering">
                <select name="orderby" class="orderby">
                  <option value="">Sort by popularity</option>
                  <option value="">Sort by average rating</option>
                  <option value="" selected="selected">Sort by newness</option>
                  <option value="">Sort by price: low to high</option>
                  <option value="">Sort by price: high to low</option>
                </select>
              </form>
            </div>
            <div class="col-md-6">
              <div class="text-right text-center-xs">
                <p class="result-count"> Showing 1–12 of 23 results</p>
              </div>
            </div>
          </div>
          <div class="products row">
            <div class="col-6 col-sm-6 col-lg-4">
              <div class="product-item shadow-sm pb-2">
                <div class="product-thumbnail">
                  <a href="/product">
                    <div class="badges">
                      <span class="sale">Sale</span>
                    </div>
                    <img src="img/shop/paste-bank.png" alt="">
                  </a>
                  <div class="actions">
                    <button type="button" onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
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
            <div class="col-6 col-sm-6 col-lg-4">
              <div class="product-item shadow-sm pb-2">
                <div class="product-thumbnail">
                  <a href="/product">
                    <div class="badges">
                      <span class="sale">Sale</span>
                    </div>
                    <img src="img/shop/banka-3kg.png" alt="">
                  </a>
                  <div class="actions">
                    <button type="button" onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
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
            <div class="col-6 col-sm-6 col-lg-4">
              <div class="product-item shadow-sm pb-2">
                <div class="product-thumbnail">
                  <a href="/product">
                    <div class="badges">
                      <span class="sale">Sale</span>
                    </div>
                    <img src="img/shop/capsule.png" alt="">
                  </a>
                  <div class="actions">
                    <button type="button" onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
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
            <div class="col-6 col-sm-6 col-lg-4">
              <div class="product-item shadow-sm pb-2">
                <div class="product-thumbnail">
                  <a href="/product">
                    <div class="badges">
                      <span class="sale">Sale</span>
                    </div>
                    <img src="img/shop/banka-1-kg.png" alt="">
                  </a>
                  <div class="actions">
                    <button type="button" onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
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
            <div class="col-6 col-sm-6 col-lg-4">
              <div class="product-item shadow-sm pb-2">
                <div class="product-thumbnail">
                  <a href="/product">
                    <div class="badges">
                      <span class="sale">Sale</span>
                    </div>
                    <img src="img/shop/banka-3kg.png" alt="">
                  </a>
                  <div class="actions">
                    <button type="button" onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
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
            <div class="col-6 col-sm-6 col-lg-4">
              <div class="product-item shadow-sm pb-2">
                <div class="product-thumbnail">
                  <a href="/product">
                    <div class="badges">
                      <span class="sale">Sale</span>
                    </div>
                    <img src="img/shop/paste-bank.png" alt="">
                  </a>
                  <div class="actions">
                    <button type="button" onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
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
            <div class="col-6 col-sm-6 col-lg-4">
              <div class="product-item shadow-sm pb-2">
                <div class="product-thumbnail">
                  <a href="/product">
                    <div class="badges">
                      <span class="sale">Sale</span>
                    </div>
                    <img src="img/shop/capsule.png" alt="">
                  </a>
                  <div class="actions">
                    <button type="button" onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
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
            <div class="col-6 col-sm-6 col-lg-4">
              <div class="product-item shadow-sm pb-2">
                <div class="product-thumbnail">
                  <a href="/product">
                    <div class="badges">
                      <span class="sale">Sale</span>
                    </div>
                    <img src="img/shop/banka-1-kg.png" alt="">
                  </a>
                  <div class="actions">
                    <button type="button" onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
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
            <div class="col-6 col-sm-6 col-lg-4">
              <div class="product-item shadow-sm pb-2">
                <div class="product-thumbnail">
                  <a href="/product">
                    <div class="badges">
                      <span class="sale">Sale</span>
                    </div>
                    <img src="img/shop/banka-3kg.png" alt="">
                  </a>
                  <div class="actions">
                    <button type="button" onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
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
            <div class="col-6 col-sm-6 col-lg-4">
              <div class="product-item shadow-sm pb-2">
                <div class="product-thumbnail">
                  <a href="/product">
                    <div class="badges">
                      <span class="sale">Sale</span>
                    </div>
                    <img src="img/shop/paste-bank.png" alt="">
                  </a>
                  <div class="actions">
                    <button type="button" onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
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
            <div class="col-6 col-sm-6 col-lg-4">
              <div class="product-item shadow-sm pb-2">
                <div class="product-thumbnail">
                  <a href="/product">
                    <div class="badges">
                      <span class="sale">Sale</span>
                    </div>
                    <img src="img/shop/capsule.png" alt="">
                  </a>
                  <div class="actions">
                    <button type="button" onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
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
            <div class="col-6 col-sm-6 col-lg-4">
              <div class="product-item shadow-sm pb-2">
                <div class="product-thumbnail">
                  <a href="/product">
                    <div class="badges">
                      <span class="sale">Sale</span>
                    </div>
                    <img src="img/shop/banka-1-kg.png" alt="">
                  </a>
                  <div class="actions">
                    <button type="button" onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-xs button-primary">В корзину</button>
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
          </div>

          <!-- PAGINATION -->
          <div class="pagination text-center">
            <ul class="page-pagination">
              <li><a class="prev page-numbers" href="#"><i class="fa fa-angle-double-left"></i></a></li>
              <li><a class="page-numbers" href="#">1</a></li>
              <li><span class="page-numbers current">2</span></li>
              <li><a class="page-numbers" href="#">3</a></li>
              <li><span class="page-numbers dots">…</span></li>
              <li><a class="page-numbers" href="#">7</a></li>
              <li><a class="next page-numbers" href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 order-lg-first order-sm-last">
          <div class="sidebar-content">
            <div class="widget widget_search">
              <form class="search-form" action="">
                <input type="search" class="search-field" placeholder="Search..." value="" name="s" />
                <button type="submit" class="search-submit">
                  <i class="icon-magnifier"></i>
                </button>
              </form>
            </div>
            <div class="widget widget_categories">
              <h2 class="widget-title">Product Categories</h2>
              <ul>
                <li class="cat-item"><a href="#">Accessories <span class="count">(3)</span></a></li>
                <li class="cat-item"><a href="#">Bags <span class="count">(4)</span></a></li>
                <li class="cat-item"><a href="#">Interior <span class="count">(5)</span></a></li>
                <li class="cat-item"><a href="#">Men <span class="count">(9)</span></a></li>
                <li class="cat-item"><a href="#">Women <span class="count">(3)</span></a></li>
              </ul>
            </div>
            <div class="widget">
              <h2 class="widget-title">Options</h2>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Default checkbox</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="2" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">Default checkbox</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="3" id="defaultCheck3">
                <label class="form-check-label" for="defaultCheck3">Default checkbox</label>
              </div>
            </div>
            <div class="widget widget_posts">
              <h2 class="widget-title">Lastest Products</h2>
              <ul class="product_list_widget">
                <li>
                  <a href="/detail">
                    <img src="img/shop/shop_80x100.jpg" alt="" />
                    <h6 class="product-title">Cotton Cap</h6>
                  </a>
                  <span class="amount">$9.99</span>
                  <div class="star-rating">
                    <span style="width:100%"></span>
                  </div>
                </li>
                <li>
                  <a href="/detail">
                    <img src="img/shop/shop_80x100.jpg" alt="" />
                    <h6 class="product-title">Picture Light</h6>
                  </a>
                  <span class="amount">$69.99</span>
                  <div class="star-rating">
                    <span style="width:0%"></span>
                  </div>
                </li>
              </ul>
            </div>
            <div class="widget widget_tag_cloud">
              <h2 class="widget-title">Tags</h2>
              <div class="tagcloud">
                <a href="#">Classic</a>, <a href="#">diary</a>, <a href="#">experience</a>, <a href="#">Flower</a>, <a href="#">Food</a>, <a href="#">happy</a>, <a href="#">home</a>, <a href="#">landing</a>, <a href="#">life</a>, <a href="#">live</a>, <a href="#">love</a>, <a href="#">outdoor</a>, <a href="#">paris</a>, <a href="#">photo</a>, <a href="#">Restaurant</a>, <a href="#">spring</a>, <a href="#">stay</a>, <a href="#">sunday</a>, <a href="#">takeoff</a>, <a href="#">trip</a>, <a href="#">view</a>, <a href="#">weekend</a>
              </div>
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