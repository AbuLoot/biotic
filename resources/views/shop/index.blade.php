@extends('layout-shop')

@section('title_description', 'Biotic - Продукты долголетия')

@section('meta_description', 'Торговая компания “Biotic” специализируется на продаже высококачественных, натуральных продуктов для здоровья и красоты. Оптово-розничные продажи БАДов, витаминов, трав, спортивного питания, натуральной пищи, ароматов, средств для гигиены и ухода.')

@section('head')

@endsection

@section('content')

  <?php $items = session('items'); ?>

  <!-- CAROUSEL -->
  <section id="carouselIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @foreach($slide_items as $key => $slide_item)
        <li data-target="#carouselIndicators" data-slide-to="{{ $key }}" @if($key == 0) class="active" @endif></li>
      @endforeach
    </ol>
    <div class="carousel-inner">
      @foreach($slide_items as $key => $slide_item)
        <div class="carousel-item @if($key == 0) active @endif">
          <img src="img/slide/{{ $slide_item->image }}" class="d-block" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="white">{{ $slide_item->title }}</h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
          </div>
        </div>
      @endforeach
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
        @foreach($mode_top->products->where('status', 1)->take(12) as $top_product)
          <div class="col-sm-3 col-6">
            <div class="product-item shadow-sm pb-2">
              <div class="product-thumbnail">
                <a href="/product/{{ $top_product->slug }}">
                  <img src="/img/products/{{ $top_product->path.'/'.$top_product->image }}" alt="{{ $top_product->title }}">
                </a>
                <div class="offer">
                  @foreach($top_product->modes as $m)
                    @if(in_array($m->slug, ['recommend', 'novelty', 'best-price', 'stock', 'plus-gift']))
                      <div class="offer-{{ $m->slug }}">{{ $m->title }}</div>
                    @endif
                  @endforeach
                </div>
                <div class="actions">
                  @if (is_array($items) AND isset($items['products_id'][$top_product->id]))
                    <a href="/cart" class="button style-flat button-xs button-secondary" data-toggle="tooltip" data-placement="top" title="Перейти в корзину">Оплатить</a>
                  @else
                    <button class="button style-flat button-xs button-primary" data-product-id="{{ $top_product->id }}" onclick="addToCart(this);" title="Добавить в корзину">В корзину</button>
                  @endif
                </div>
              </div>
              <div class="product-info">
                <a class="silver fz-14" href="/catalog/{{ $top_product->category->parent->slug . '/' . $top_product->category->slug . '/' . $top_product->category_id }}">{{ $top_product->category->title }}</a>
                <a href="/product/{{ $top_product->slug }}">
                  <h2 class="product-title">{{ $top_product->title }}</h2>
                  <div class="price mt-1">{{ $top_product->price }}〒</div>
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- NEW PRODUCTS -->
  <section class="pt-3 pb-3">
    <div class="container">
      <h4 class="text-uppercase text-center mb-3">Новые продукты</h4>
      <div class="row">
        @foreach($mode_new->products->where('status', 1)->take(12) as $new_product)
          <div class="col-sm-3 col-6">
            <div class="product-item shadow-sm pb-2">
              <div class="product-thumbnail">
                <a href="/product/{{ $new_product->slug }}">
                  <img src="/img/products/{{ $new_product->path.'/'.$new_product->image }}" alt="{{ $new_product->title }}">
                </a>
                <div class="offer">
                  @foreach($new_product->modes as $m)
                    @if(in_array($m->slug, ['recommend', 'novelty', 'best-price', 'stock', 'plus-gift']))
                      <div class="offer-{{ $m->slug }}">{{ $m->title }}</div>
                    @endif
                  @endforeach
                </div>
                <div class="actions">
                  @if (is_array($items) AND isset($items['products_id'][$new_product->id]))
                    <a href="/cart" class="button style-flat button-xs button-secondary" data-toggle="tooltip" data-placement="top" title="Перейти в корзину">Оплатить</a>
                  @else
                    <button class="button style-flat button-xs button-primary" data-product-id="{{ $new_product->id }}" onclick="addToCart(this);" title="Добавить в корзину">В корзину</button>
                  @endif
                </div>
              </div>
              <div class="product-info">
                <a class="silver fz-14" href="/catalog/{{ $new_product->category->parent->slug . '/' . $new_product->category->slug . '/' . $new_product->category_id }}">{{ $new_product->category->title }}</a>
                <a href="/product">
                  <h2 class="product-title">{{ $new_product->title }}</h2>
                  <div class="price mt-1">{{ $new_product->price }}〒</div>
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection

@section('scripts')
  <script>
    function addToCart(i) {

      var productId = $(i).data("product-id");

      if (productId != '') {
        $.ajax({
          type: "get",
          url: '/add-to-cart/'+productId,
          dataType: "json",
          data: {},
          success: function(data) {
            $('*[data-product-id="'+productId+'"]').replaceWith('<a href="/cart" class="button style-flat button-xs button-secondary">Оплатить</a>');
            $('#count-items').text(data.countItems);
            $('#modalCart').modal('show');

            // alert('Товар добавлен в корзину');
          }
        });
      } else {
        alert("Ошибка сервера");
      }
    }
  </script>
@endsection
