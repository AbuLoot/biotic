<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

  <title>@yield('title_description', 'Biotic - Продукты долголетия')</title>
  <meta name="description" content="@yield('meta_description', 'Biotic - Продукты долголетия')">

  <link rel="icon" href="/favicon.png" type="image/x-icon"/>
  <link rel="shortcut icon" href="/favicon.png" type="image/x-icon"/>

  <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" media="all" />
  <link rel="stylesheet" href="/css/simple-line-icons.css" type="text/css" media="all" />
  <link rel="stylesheet" href="/css/settings.css" type="text/css" media="all"/>
  <!-- <link rel="stylesheet" href="/css/owl.carousel.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="/css/owl.theme.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="/css/owl.transitions.css" type="text/css" media="all"/> -->
  <link rel="stylesheet" href="/css/style.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="/css/shop/my.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="/css/custom.css" type="text/css" media="all"/>
  <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900%7CLibre+Baskerville:400,400i,700" rel="stylesheet"/>
  <link href="/bower_components/typeahead.js/dist/typeahead.bootstrap.css" rel="stylesheet">
  @yield('head')

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="site">
    <!-- TOP BAR -->
    <div class="header-top style-2 bb-1 d-none d-sm-block">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-7 col-xs-center">
            <div class="top-bar-wrap top-bar-left fullwidth">
              <ul class="top-bar-info text-center-sm">
                <li class="info-item">
                  <i class="info-icon fa fa-phone"></i>
                  <a class="fz-16" href="tel:+77078875631">87078875631</a>
                </li>
                <li class="info-item">
                  <i class="info-icon fa fa-whatsapp"></i>
                  <a class="fz-16" href="whatsapp:+77078875631">87078875631</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-5">
            <div class="top-bar-wrap top-bar-right">
              <div class="lh-40">
                @guest
                  <a class="text-right" href="/login-reg">Войти</a>
                @else
                  <a class="text-right" href="/profile"><b>{{ Auth::user()->name }}</b></a>
                @endguest
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- LOGO & SEARCH -->
    <div class="header-top style-2 pt-3 d-none d-sm-block">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-3 d-md-none d-lg-block col-xs-center">
            <a href="/"><img src="/img/logo-brand.png" alt="Biotic" class="main-logo"></a>
          </div>
          <div class="col-sm-8 col-lg-6">
            <div class="widget widget_search">
              <form class="search-form" method="get" action="/search">
                <input type="search" name="text" class="typeahead-goods search-field" placeholder="Поиск..." data-provide="typeahead">
                <button type="submit" class="search-submit">
                  <i class="icon-magnifier"></i>
                </button>
              </form>
            </div>
          </div>
          <div class="col-sm-4 col-lg-3">
            <div class="pull-right text-center-xs">
              <a href="/cart" class="button style-outline button-icon button-xs button-secondary">
                <span class="btn-text">Корзина <!-- <i class="icon-basket fz-16 fw-600"></i> --></span>
                <span class="btn-icon">
                  <!-- <i class="icon-basket fz-18 fw-600"></i> -->

                  <?php $items = session('items'); ?>
                  <span id="count-items" class="badge badge-pill badge-dark fz-12">{{ (is_array($items)) ? count($items['products_id']) : 0 }}</span>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- HEADER -->
    <header class="header header-desktop style-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="header-wrap">
              <div class="header-left">
                <div class="branding">
                  <div class="branding__logo">
                    <a href="/">
                      <img src="/img/logo-brand-130x55.png" alt="Biotic" class="main-logo d-block d-md-block d-lg-none">
                    </a>
                  </div>
                </div>
              </div>
              <div class="header-right">
                <!-- <a href="/cart" class="d-display d-sm-block d-md-none fz-22 lh-24 mt-1 mr-1">
                  <i class="fw-bolder- icon-handbag"></i>
                  <span class="badge badge-pill- badge-light">0</span>
                </a> -->

                <div class="mini-cart d-none- d-sm-block d-md-none">
                  <a href="/cart" class="d-block mini-cart__button" title="View your shopping cart">
                    <span class="mini-cart-icon" data-count="{{ (is_array($items)) ? count($items['products_id']) : 0 }}"></span>
                  </a>
                </div>

                <div id="page-open-mobile-menu" class="page-open-mobile-menu">
                  <div><i></i></div>
                </div>
              </div>

              <!-- MENU -->
              <div class="page-navigation-wrap">
                <div class="navigation page-navigation">
                  <nav class="menu menu--primary">
                    <ul>
                      <?php $traverse = function ($categories, $parent = NULL) use (&$traverse) { ?>
                        <?php foreach ($categories as $category) : ?>
                          <?php if ($category->isRoot() && count($category->children) > 0) : ?>
                            <li class="menu-item-has-children <?php if (count($category->children) >= 12) { echo 'mega-menu'; } ?>">
                              <a href="/catalog/{{ $category->slug }}/{{ $category->id }}">
                                <span class="sub-arrow">+</span>
                                <span class="menu-item-title text-uppercase">{{ $category->title }}</span>
                                <span class="toggle-sub-menu"></span>
                              </a>
                              <ul class="sub-menu">
                                <?php if (count($category->children) > 36) : ?>
                                  <li>
                                    <div class="mega-menu-content">
                                      <ul class="menu" style="-webkit-column-count: 4; -moz-column-count: 4; column-count: 4;">
                                        <?php $traverse($category->children, $category->slug.'/'); ?>
                                      </ul>
                                    </div>
                                  </li>
                                <?php elseif (count($category->children) >= 12) : ?>
                                  <li>
                                    <div class="mega-menu-content">
                                      <ul class="menu" style="-webkit-column-count: 3; -moz-column-count: 3; column-count: 3;">
                                        <?php $traverse($category->children, $category->slug.'/'); ?>
                                      </ul>
                                    </div>
                                  </li>
                                <?php else : ?>
                                  <?php $traverse($category->children, $category->slug.'/'); ?>
                                <?php endif; ?>
                              </ul>
                            </li>
                          <?php elseif ($category->hasParent() && count($category->children) > 0) : ?>
                            <li><b>{{ $category->title }}</b></li>
                            <?php $traverse($category->children, $category->parent->slug.'/'); ?>
                          <?php else : ?>
                            <li><a href="/catalog/{{ $parent . $category->slug }}/{{ $category->id }}">{{ $category->title }}</a></li>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      <?php }; ?>
                      <?php $traverse($categories); ?>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- MOBILE MENU -->
    <nav id="page-mobile-main-menu" class="page-mobile-main-menu">
      <div class="page-mobile-menu-header">
        <div class="page-mobile-menu-logo">
          <a href="/">
            <img src="/img/logo-brand.png" class="main-logo" alt="Logo Biotic"/>
          </a>
        </div>
        <div id="page-close-mobile-menu" class="page-close-mobile-menu">
          <div><i></i></div>
        </div>
      </div>
      <ul class="mobile-menu">
        <?php $traverse = function ($categories, $parent = NULL) use (&$traverse) { ?>
          <?php foreach ($categories as $category) : ?>
            <?php if ($category->isRoot() && count($category->children) > 0) : ?>
              <li>
                <a href="javascript:void(0)">
                  <span class="menu-item-title text-uppercase">{{ $category->title }}</span>
                  <span class="toggle-sub-menu"></span>
                </a>
                <ul class="sub-menu">
                  <?php $traverse($category->children, $category->slug.'/'); ?>
                </ul>
              </li>
            <?php elseif ($category->hasParent() && count($category->children) > 0) : ?>
              <!-- <li><a href="/catalog/{{ $category->slug }}" class="text-muted">{{ $category->title }}</a></li> -->
              <?php $traverse($category->children, $category->parent->slug.'/'); ?>
            <?php else : ?>
              <li><a href="/catalog/{{ $parent . $category->slug }}/{{ $category->id }}">{{ $category->title }}</a></li>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php }; ?>
        <?php $traverse($categories); ?>
          @guest
            <li>
              <a class="pt-2 text-uppercase" href="/login-reg"><i class="icon-user"></i> Войти </a>
            </li>
          @else
            <li>
              <a class="pt-2 text-uppercase" href="/login"><i class="icon-user"></i> {{ Auth::user()->name }}</a>
              <a class="pt-2 text-uppercase" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="icon-logout"></i> {{ __('Выйти') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
          @endguest
      </ul>
    </nav>

    <!-- SEARCH -->
    <section class="widget widget_search custom_search d-block d-sm-none">
      <form class="search-form" action="">
        <input type="search" class="typeahead-goods search-field" placeholder="Поиск..." value="" name="s" />
        <button type="submit" class="search-submit">
          <i class="icon-magnifier"></i>
        </button>
      </form>
    </section>

    <main>
      @yield('content')
    </main>

    <!-- MODAL CART -->
    <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="modalCartLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCartLabel">Корзина</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-6 col-sm-4 col-md-2">
                  <a href="/detail" class="d-inline-block"><img class="mr-1 ml-1" src="/img/shop/shop_80x100.jpg" alt=""></a>
                </div>
                <div class="col-6 col-sm-8 col-md-4">
                  <h5>Short skirt Short skirt  ShortskirtShortskirt</h5>
                </div>
                <div class="col-md-6 mt-1">
                  <table class="table table-sm table-bordered-">
                    <tbody>
                      <tr scope="row">
                        <td><span class="amount">10000〒</span></td>
                        <td>
                          <form class="cart" method="get" action="/qty">
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
                          <span class="amount fw-bolder secondary-color">10000〒</span>
                          <br>
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
                <div class="col-6 col-sm-4 col-md-2">
                  <a href="/detail" class="d-inline-block"><img class="mr-1 ml-1" src="/img/shop/shop_80x100.jpg" alt=""></a>
                </div>
                <div class="col-6 col-sm-8 col-md-4">
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
                                <button type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('qty2'); var qty = qty_el.value; if (!isNaN(qty) && qty > 1) qty_el.value--; return false;">-</button>
                                <input id="qty2" type="text" name="quantity" value="1" class="input-text qty text pl-0 pr-0" size="4" />
                                <button type="button" class="qty-increase" onclick="var qty_el = document.getElementById('qty2'); var qty = qty_el.value; if (!isNaN(qty)) qty_el.value++; return false;">+</button>
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
            </div>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-secondary" data-dismiss="modal">Продолжить покупку</a>
            <a href="/cart" class="btn btn-primary">Оплатить</a>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer pb-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="widget">
              <h2 class="widgettitle color text-uppercase">Информация</h2>
              <div class="mb-3"></div>
              <img src="/img/logo-brand-130x55.png" alt="" />
              <div class="mb-3"></div>
              <p class="lh-32">Казахстан, город Алматы, улица Толе би 286/2, офис 401</p>
              <p class="lh-32">biotic.company@gmail.com</p>
              <p class="lh-32"></p>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <h2 class="widgettitle color mb-3 text-uppercase">Страницы</h2>
            <ul class="style-2">
              @foreach($pages as $page)
                <li class="item"><a href="/{{ $page->slug }}" class="link"><span class="link-text">{{ $page->title }}</span></a></li>
              @endforeach
            </ul>
          </div>
          <div class="col-sm-3 col-lg-3">
            <h2 class="widgettitle color mb-3 text-uppercase"> Следуйте за нами</h2>
            <ul class="style-2">
              <li class="item">
                <a href="https://twitter.com/biotickz" class="link"> <span class="link-text">Twitter</span> </a>
              </li>
              <li class="item">
                <a href="https://www.facebook.com/biotic.kz" class="link"> <span class="link-text">Facebook</span> </a>
              </li>
              <li class="item">
                <a href="https://www.instagram.com/biotic.kz/" class="link"> <span class="link-text">Instagram</span> </a>
              </li>
              <li class="item">
                <a href="https://vk.com/biotic_kz" class="link"> <span class="link-text">VK</span> </a>
              </li>
              <li class="item">
                <a href="https://www.youtube.com/channel/UC3h_DOXPPT1XXbkRz8zvaMQ" class="link"> <span class="link-text">YouTube</span> </a>
              </li>
            </ul>
          </div>
          <div class="col-sm-3 col-lg-3">

          </div>
        </div>
      </div>
    </footer>
  </div>

  <a id="backtotop" class="scrollup scrollup--fixed"><i class="fa fa-angle-up"></i></a>

  <!-- LOAD JQUERY LIBRARY -->
  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery-migrate.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/modernizr-2.7.1.min.js"></script>
  <!-- <script src="/js/owl.carousel.min.js"></script> -->
  <script src="/js/headroom.min.js"></script>
  <script src="/js/jQuery.headroom.js"></script>
  <!-- <script src="/js/jquery.counterup.min.js"></script> -->

  <!-- Waypoints is the easiest way to trigger a function when you scroll to an element. -->
  <!-- <script src="/js/waypoints.min.js"></script> -->

  <!-- <script src="/js/circle-progress.min.js"></script> -->
  <!-- <script src="/js/pie-chart.js"></script> -->
  <script src="/js/script.js"></script>

  <script src="/bower_components/typeahead.js/dist/typeahead.bundle.min.js"></script>
  <!-- Typeahead Initialization -->
  <script>
    jQuery(document).ready(function($) {
      // Set the Options for "Bloodhound" suggestion engine
      var engine = new Bloodhound({
        remote: {
          url: '/search-ajax?text=%QUERY%',
          wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('text'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
      });

      $(".typeahead-goods").typeahead({
        hint: true,
        highlight: true,
        minLength: 2
      }, {
        limit: 10,
        source: engine.ttAdapter(),
        displayKey: 'title',

        templates: {
          empty: [
            '<li>&nbsp;&nbsp;&nbsp;Ничего не найдено.</li>'
          ],
          suggestion: function (data) {
            return '<li class="list-group-item"><a href="/product/' + data.slug + '"><img class="list-img" src="/img/products/' + data.path + '/' + data.image + '"> ' + data.title + '</a></li>'
          }
        }
      });
    });
  </script>

  @yield('scripts')

  <!-- <script src="js/jquery.themepunch.tools.min.js"></script>
  <script src="js/jquery.themepunch.revolution.min.js"></script>
  <script src="js/extensions/revolution.extension.video.min.js"></script>
  <script src="js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="js/extensions/revolution.extension.actions.min.js"></script>
  <script src="js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="js/extensions/revolution.extension.migration.min.js"></script>
  <script src="js/extensions/revolution.extension.parallax.min.js"></script> -->
</body>
</html>
