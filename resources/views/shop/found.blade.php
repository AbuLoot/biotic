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
                <li class="sub tail current">Поиск</li>
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
      <h3>Поиск по запросу <b>"{{ $text }}"</b></h3>
      <br>
      <div class="row no-gutters">
        @foreach ($products as $product)
          <div class="col-6 col-sm-6 col-lg-3">
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

        <!-- Pagination -->
        {{ $products->links('vendor.pagination.bootstrap-4') }}
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