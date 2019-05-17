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
              <h1 class="heading">{{ $category->title }}</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div id="page-breadcrumb" class="page-breadcrumb">
              <ul class="breadcrumb">
                <li><a href="/">Главная</a></li>
                @foreach ($category->ancestors as $ancestor)
                  @unless($ancestor->parent_id != NULL && $ancestor->children->count() > 0)
                    <li><a href="/catalog/{{ $ancestor->slug . '/' . $ancestor->id }}">{{ $ancestor->title }}</a></li>
                  @endunless
                @endforeach
                <li class="sub tail current">{{ $category->title }}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php $items = session('items'); ?>
  <section class="section pt-6 pb-6">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 order-lg-last order-sm-first">
          <div class="shop-filter mb-2 row">
            <div class="col-md-6">
              <form class="commerce-ordering">
                <select name="orderby" id="orderby">
                  @foreach(trans('data.sort') as $key => $value)
                    @if($key == session('action'))
                      <option value="{{ $key }}" selected>{{ $value }}</option>
                    @else
                      <option value="{{ $key }}">{{ $value }}</option>
                    @endif
                  @endforeach
                </select>
              </form>
            </div>
            <div class="col-md-6">
              <div class="text-right text-center-xs">
                <!-- <p class="result-count"> Показана 1–12 из 23 результатов</p> -->
              </div>
            </div>
          </div>
          <div class="products" id="products">
            <div class="row no-gutters">
              @foreach ($products as $product)
                <div class="col-6 col-sm-6 col-lg-4">
                  <div class="product-item shadow-sm pb-2">
                    <div class="product-thumbnail">
                      <a href="/product/{{ $product->slug }}">
                        <img src="/img/products/{{ $product->path.'/'.$product->image }}" alt="{{ $product->category->title }}">
                      </a>
                      <div class="offer">
                        @foreach($product->modes as $m)
                          @if(in_array($m->slug, ['recommend', 'novelty', 'best-price', 'stock', 'plus-gift']))
                            <div class="offer-{{ $m->slug }}">{{ $m->title }}</div>
                          @endif
                        @endforeach
                      </div>
                      <div class="actions">
                        @if (is_array($items) AND isset($items['products_id'][$product->id]))
                          <a href="/cart" class="button style-flat button-xs button-secondary" data-toggle="tooltip" data-placement="top" title="Перейти в корзину">Оплатить</a>
                        @else
                          <button class="button style-flat button-xs button-primary" data-product-id="{{ $product->id }}" onclick="addToCart(this);" title="Добавить в корзину">В корзину</button>
                        @endif
                      </div>
                    </div>
                    <div class="product-info">
                      <a href="/product/{{ $product->slug }}">
                        <h2 class="product-title mb-1">{{ $product->title }}</h2>
                        @if($product->status == 1)
                          <div class="price">{{ $product->price }}〒</div>
                        @else
                          {{ trans('statuses.data.'.$product->status) }}
                        @endif
                      </a>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>

            <!-- Pagination -->
            {{ $products->links('vendor.pagination.bootstrap-4') }}
          </div>
        </div>
        <div class="col-lg-3 order-lg-first order-sm-last">
          <aside class="sidebar-content">
            <!-- <div class="widget widget_search">
              <form class="search-form" action="">
                <input type="search" class="search-field" placeholder="Search..." value="" name="s" />
                <button type="submit" class="search-submit"> <i class="icon-magnifier"></i> </button>
              </form>
            </div> -->
            <div class="widget">
              <h2 class="widget-title">Опции</h2>
              <form action="/catalog/{{ $category->slug }}" method="get" id="filter">
                {{ csrf_field() }}
                <?php $options_id = session('options'); ?>
                @foreach ($grouped as $data => $group)
                  <h5 class="mt-2">{{ $data }}</h5>
                  @foreach ($group as $option)
                    <div class="form-check">
                      <label class="form-check-label d-block-"><input class="form-check-input" type="checkbox" name="options_id[]" value="{{ $option->id }}" @if(isset($options_id) AND in_array($option->id, $options_id)) checked @endif>{{ $option->title }}</label>
                    </div>
                  @endforeach
                @endforeach
              </form>
            </div>
            <!-- <div class="widget widget_posts">
              <h2 class="widget-title">Lastest Products</h2>
              <ul class="product_list_widget">
                <li>
                  <a href="/detail">
                    <img src="/img/shop/shop_80x100.jpg" alt="" />
                    <h6 class="product-title">Cotton Cap</h6>
                  </a>
                  <span class="amount">$9.99</span>
                  <div class="star-rating"> <span style="width:100%"></span> </div>
                </li>
                <li>
                  <a href="/detail">
                    <img src="/img/shop/shop_80x100.jpg" alt="" />
                    <h6 class="product-title">Picture Light</h6>
                  </a>
                  <span class="amount">$69.99</span>
                  <div class="star-rating"> <span style="width:0%"></span> </div>
                </li>
              </ul>
            </div> -->
            <div class="widget widget_tag_cloud">
              <h2 class="widget-title">Теги</h2>
              <div class="tagcloud">
                <a href="#">Classic</a>, <a href="#">diary</a>, <a href="#">experience</a>, <a href="#">Flower</a>, <a href="#">Food</a>, <a href="#">happy</a>, <a href="#">home</a>, <a href="#">landing</a>, <a href="#">life</a>, <a href="#">live</a>, <a href="#">love</a>, <a href="#">outdoor</a>, <a href="#">paris</a>, <a href="#">photo</a>, <a href="#">Restaurant</a>, <a href="#">spring</a>, <a href="#">stay</a>, <a href="#">sunday</a>, <a href="#">takeoff</a>, <a href="#">trip</a>, <a href="#">view</a>, <a href="#">weekend</a>
              </div>
            </div>
          </aside>
        </div>
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

    // Filter products
    $('#filter').on('click', 'input', function(e) {

      var optionsId = new Array();

      $('input[name="options_id[]"]:checked').each(function() {
        optionsId.push($(this).val());
      });

      var page = $(location).attr('href').split('catalog')[1];
      var slug = page.split('?')[0];

      $.ajax({
        type: 'get',
        url: '/catalog' + slug,
        dataType: 'json',
        data: {
          'options_id': optionsId,
        },
        success: function(data) {
          $('#products').html(data);
        }
      });
    });

    // Action of products
    $('#actions > a').click(function() {

      var action = $(this).data("action");
      var text = $(this).text();

      var page = $(location).attr('href').split('catalog')[1];
      var slug = page.split('?')[0];

      $.ajax({
        type: "get",
        url: '/catalog'.page,
        dataType: "json",
        data: {
          "action": action
        },
        success: function(data) {
          $('#products').html(data);
          // $('#dropdownMenuButton').text(text);
          location.reload();
        }
      });
    });

  </script>
@endsection