@extends('main-layout-shop')

@section('title_description', 'Biotic - Продукты долголетия')

@section('meta_description', 'Торговая компания “Biotic” специализируется на продаже высококачественных, натуральных продуктов для здоровья и красоты. Оптово-розничные продажи БАДов, витаминов, трав, спортивного питания, натуральной пищи, ароматов, средств для гигиены и ухода.')

@section('head')
    <link href="/new/css/listing.css" rel="stylesheet">
@endsection

@section('content')

  <div class="top_banner">
    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
      <div class="container">
        <div class="breadcrumbs">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li>Page active</li>
          </ul>
        </div>
        <h1>{{ $category->title }}</h1>
      </div>
    </div>
    <img src="img/bg_cat_shoes.jpg" class="img-fluid" alt="">
  </div>

  <div id="stick_here"></div>   
  <div class="toolbox elemento_stick">
    <div class="container">
    <ul class="clearfix">
      <li>
        <div class="sort_select">
          <select name="sort" id="sort">
              <option value="popularity" selected="selected">Sort by popularity</option>
              <option value="rating">Sort by average rating</option>
              <option value="date">Sort by newness</option>
              <option value="price">Sort by price: low to high</option>
              <option value="price-desc">Sort by price: high to 
          </select>
        </div>
      </li>
      <li>
        <a href="#0"><i class="ti-view-grid"></i></a>
        <a href="listing-row-1-sidebar-left.html"><i class="ti-view-list"></i></a>
      </li>
      <li>
        <a href="#0" class="open_filters">
          <i class="ti-filter"></i><span>Filters</span>
        </a>
      </li>
    </ul>
    </div>
  </div>
  
  <div class="container margin_30">
    <div class="row">
      <aside class="col-lg-3" id="sidebar_fixed">
        <div class="filter_col">
          <div class="inner_bt"><a href="#" class="open_filters"><i class="ti-close"></i></a></div>
          <div class="filter_type version_2">
            <h4><a href="#filter_1" data-toggle="collapse" class="opened">Categories</a></h4>
            <div class="collapse show" id="filter_1">
              <ul>
                <li>
                  <label class="container_check">Men <small>12</small>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container_check">Women <small>24</small>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container_check">Running <small>23</small>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container_check">Training <small>11</small>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </li>
              </ul>
            </div>
            <!-- /filter_type -->
          </div>
          <!-- /filter_type -->
          <div class="filter_type version_2">
            <h4><a href="#filter_2" data-toggle="collapse" class="opened">Color</a></h4>
            <div class="collapse show" id="filter_2">
              <ul>
                <li>
                  <label class="container_check">Blue <small>06</small>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container_check">Red <small>12</small>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container_check">Orange <small>17</small>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container_check">Black <small>43</small>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </li>
              </ul>
            </div>
          </div>
          <!-- /filter_type -->
          <div class="filter_type version_2">
            <h4><a href="#filter_3" data-toggle="collapse" class="closed">Brands</a></h4>
            <div class="collapse" id="filter_3">
              <ul>
                <li>
                  <label class="container_check">Adidas <small>11</small>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container_check">Nike <small>08</small>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container_check">Vans <small>05</small>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container_check">Puma <small>18</small>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </li>
              </ul>
            </div>
          </div>
          <!-- /filter_type -->
          <div class="filter_type version_2">
            <h4><a href="#filter_4" data-toggle="collapse" class="closed">Price</a></h4>
            <div class="collapse" id="filter_4">
              <ul>
                <li>
                  <label class="container_check">$0 — $50<small>11</small>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container_check">$50 — $100<small>08</small>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container_check">$100 — $150<small>05</small>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li>
                  <label class="container_check">$150 — $200<small>18</small>
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </li>
              </ul>
            </div>
          </div>
          <!-- /filter_type -->
          <div class="buttons">
            <a href="#0" class="btn_1">Filter</a> <a href="#0" class="btn_1 gray">Reset</a>
          </div>
        </div>
      </aside>
      <!-- /col -->
      <div class="col-lg-9">
        <div class="row small-gutters">

          @foreach($products->where('status', 1)->take(8) as $product)
            <div class="col-6 col-md-4 col-xl-3">
              <div class="grid_item">
                <figure>
                  @foreach($product->options as $option)
                    <span class="ribbon {{ $option->slug }}">{{ $option->title }}</span>
                  @endforeach
                  <a href="/p/{{ $product->id.'-'.$product->slug }}">
                    <img class="img-fluid lazy" src="/img/products/{{ $product->path.'/'.$product->image }}" data-src="/img/products/{{ $product->path.'/'.$product->image }}" alt="">
                  </a>
                </figure>
                <a href="/p/{{ $product->id.'-'.$product->slug }}">
                  <h3>{{ $product->title }}</h3>
                </a>
                <div class="price_box">
                  <span class="new_price">{{ $product->price }}〒</span>
                  <!-- <span class="old_price">$60.00</span> -->
                </div>
                <ul>
                  <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>В избранные</span></a></li>
                  <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>В корзину</span></a></li>
                </ul>
              </div>
            </div>
          @endforeach
        </div>

        <div class="pagination__wrapper">
          {{ $products->links() }}
          <!-- <ul class="pagination">
            <li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
            <li>
              <a href="#0" class="active">1</a>
            </li>
            <li>
              <a href="#0">2</a>
            </li>
            <li>
              <a href="#0">3</a>
            </li>
            <li>
              <a href="#0">4</a>
            </li>
            <li><a href="#0" class="next" title="next page">&#10095;</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
  <!-- SPECIFIC SCRIPTS -->
  <script src="/new/js/sticky_sidebar.min.js"></script>
  <script src="/new/js/specific_listing.js"></script>

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
