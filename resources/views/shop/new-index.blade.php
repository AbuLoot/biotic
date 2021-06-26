@extends('main-layout-shop')

@section('title_description', 'Biotic - Продукты долголетия')

@section('meta_description', 'Торговая компания “Biotic” специализируется на продаже высококачественных, натуральных продуктов для здоровья и красоты. Оптово-розничные продажи БАДов, витаминов, трав, спортивного питания, натуральной пищи, ароматов, средств для гигиены и ухода.')

@section('head')

@endsection

@section('content')

  <?php $items = session('items'); ?>

  @if($slide_items->isNotEmpty())
    <div id="carousel-home">
      <!-- Slideshow -->
      <div class="owl-carousel owl-theme">
        @foreach($slide_items as $key => $slide_item)
          <div class="owl-slide cover" style="background-image: url(img/slide/{{ $slide_item->image }});">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0)">
              <div class="container">
                <div class="row justify-content-center justify-content-md-<?= ($slide_item->direction == 'right') ? 'end' : 'start'; ?>">
                  <div class="col-lg-6 static">
                    <div class="slide-text text-{{ $slide_item->direction }}">
                      <!-- <h2 class="owl-slide-animated owl-slide-title" style="color: {{ $slide_item->color }}">{{ $slide_item->title }}</h2> -->
                      <!-- <p class="owl-slide-animated owl-slide-subtitle" style="color: {{ $slide_item->color }}">{{ $slide_item->marketing }}</p> -->
                      <!-- <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="/{{ $slide_item->link }}" role="button">Подробнее</a></div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div id="icon_drag_mobile"></div>
    </div>
  @endif

  <ul id="banners_grid" class="clearfix">
    <li>
      <a href="#0" class="img_container">
        <img src="/new/img/banners_cat_placeholder.jpg" data-src="/img/shop/saffron-mood-and-health-benefits-large.jpg" alt="" class="lazy">
        <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.4)">
          <h3>Витамины</h3>
          <div><span class="btn_1">Посмотреть</span></div>
        </div>
      </a>
    </li>
    <li>
      <a href="#0" class="img_container">
        <img src="/new/img/banners_cat_placeholder.jpg" data-src="/img/shop/5-benefits-of-greens-powders-large.webp" alt="" class="lazy">
        <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.4)">
          <h3>Травы и Фиточаи</h3>
          <div><span class="btn_1">Посмотреть</span></div>
        </div>
      </a>
    </li>
    <li>
      <a href="#0" class="img_container">
        <img src="/new/img/banners_cat_placeholder.jpg" data-src="/img/shop/best-intermittent-fasting-foods-large.webp" alt="" class="lazy">
        <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.4)">
          <h3>Протеины</h3>
          <div><span class="btn_1">Посмотреть</span></div>
        </div>
      </a>
    </li>
  </ul>

  <div class="container margin_60_35">
    <div class="main_title">
      <h2>{{ $mode_top->title }}</h2>
    </div>
    <div class="row small-gutters">
      @foreach($mode_top->products->where('status', 1)->take(8) as $top_product)
        <div class="col-6 col-md-4 col-xl-3">
          <div class="grid_item">
            <figure>
              @foreach($top_product->options as $option)
                <span class="ribbon {{ $option->slug }}">{{ $option->title }}</span>
              @endforeach
              <a href="/p/{{ $top_product->id.'-'.$top_product->slug }}">
                <img class="img-fluid lazy" src="/img/products/{{ $top_product->path.'/'.$top_product->image }}" data-src="/img/products/{{ $top_product->path.'/'.$top_product->image }}" alt="">
              </a>
            </figure>
            <a href="/p/{{ $top_product->id.'-'.$top_product->slug }}">
              <h3>{{ $top_product->title }}</h3>
            </a>
            <div class="price_box">
              <span class="new_price">{{ $top_product->price }}〒</span>
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
  </div>

  <div class="featured lazy" data-bg="url(/new/img/featured_home.jpg)">
    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
      <div class="container margin_60">
        <div class="row justify-content-center justify-content-md-start">
          <div class="col-lg-6 wow" data-wow-offset="150">
            <h3>Armor<br>Air Color 720</h3>
            <p>Lightweight cushioning and durable support with a Phylon midsole</p>
            <div class="feat_text_block">
              <div class="price_box">
                <span class="new_price">$90.00</span>
                <span class="old_price">$170.00</span>
              </div>
              <a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container margin_60_35">
    <div class="main_title">
      <h2>{{ $mode_new->title }}</h2>
    </div>
    <div class="row small-gutters">
      @foreach($mode_new->products->where('status', 1)->take(8) as $new_product)
        <div class="col-6 col-md-4 col-xl-3">
          <div class="grid_item">
            <figure>
              @foreach($new_product->options as $option)
                <span class="ribbon {{ $option->slug }}">{{ $option->title }}</span>
              @endforeach
              <a href="/p/{{ $new_product->id.'-'.$new_product->slug }}">
                <img class="img-fluid lazy" src="/img/products/{{ $new_product->path.'/'.$new_product->image }}" data-src="/img/products/{{ $new_product->path.'/'.$new_product->image }}" alt="">
              </a>
            </figure>
            <a href="/p/{{ $new_product->id.'-'.$new_product->slug }}">
              <h3>{{ $new_product->title }}</h3>
            </a>
            <div class="price_box">
              <span class="new_price">{{ $new_product->price }}〒</span>
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
  </div>

  <div class="bg_gray">
    <div class="container margin_30">
      <div id="brands" class="owl-carousel owl-theme">
        @foreach ($companies as $company)
          <div class="item">
            <!-- <a href="#0"><img src="/img/companies/{{ $company->logo }}" data-src="/img/companies/{{ $company->logo }}" alt="{{ $company->title }}" class="owl-lazy"></a> -->
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class="container margin_60_35">
    <div class="main_title">
      <h2>Latest news</h2>
      <span>Blog</span>
      <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <a class="box_news" href="blog.html">
          <figure>
            <img src="/new/img/blog-thumb-placeholder.jpg" data-src="/new/img/blog-thumb-1.jpg" alt="" width="400" height="266" class="lazy">
            <figcaption><strong>28</strong>Dec</figcaption>
          </figure>
          <ul>
            <li>by Mark Twain</li>
            <li>20.11.2017</li>
          </ul>
          <h4>Pri oportere scribentur eu</h4>
          <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
        </a>
      </div>
      <div class="col-lg-6">
        <a class="box_news" href="blog.html">
          <figure>
            <img src="/new/img/blog-thumb-placeholder.jpg" data-src="/new/img/blog-thumb-2.jpg" alt="" width="400" height="266" class="lazy">
            <figcaption><strong>28</strong>Dec</figcaption>
          </figure>
          <ul>
            <li>By Jhon Doe</li>
            <li>20.11.2017</li>
          </ul>
          <h4>Duo eius postea suscipit ad</h4>
          <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
        </a>
      </div>
      <div class="col-lg-6">
        <a class="box_news" href="blog.html">
          <figure>
            <img src="/new/img/blog-thumb-placeholder.jpg" data-src="/new/img/blog-thumb-3.jpg" alt="" width="400" height="266" class="lazy">
            <figcaption><strong>28</strong>Dec</figcaption>
          </figure>
          <ul>
            <li>By Luca Robinson</li>
            <li>20.11.2017</li>
          </ul>
          <h4>Elitr mandamus cu has</h4>
          <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
        </a>
      </div>
      <div class="col-lg-6">
        <a class="box_news" href="blog.html">
          <figure>
            <img src="/new/img/blog-thumb-placeholder.jpg" data-src="/new/img/blog-thumb-4.jpg" alt="" width="400" height="266" class="lazy">
            <figcaption><strong>28</strong>Dec</figcaption>
          </figure>
          <ul>
            <li>By Paula Rodrigez</li>
            <li>20.11.2017</li>
          </ul>
          <h4>Id est adhuc ignota delenit</h4>
          <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
        </a>
      </div>
    </div>
  </div>

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
            // $('#modalCart').modal('show');

            // alert('Товар добавлен в корзину');
          }
        });
      } else {
        alert("Ошибка сервера");
      }
    }
  </script>
@endsection
