<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
  <link rel="shortcut icon" href="img/favicon-mini.png"/>
  <title>Biotic</title>

  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/settings.css" type="text/css" media="all"/>
  <!-- <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/owl.transitions.css" type="text/css" media="all"/> -->
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="css/shop/my.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="css/custom.css" type="text/css" media="all"/>
  <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900%7CLibre+Baskerville:400,400i,700" rel="stylesheet"/>
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
                <a class="text-right" href="/login">Войти</a>
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
            <a href="/"><img src="img/logo-brand-130x55.png" alt="Moody" class="main-logo"></a>
          </div>
          <div class="col-sm-8 col-lg-6">
            <div class="widget widget_search">
              <form class="search-form" action="">
                <input type="search" class="search-field" placeholder="Поиск..." value="" name="s" />
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
                  <span id="count-items" class="badge badge-pill badge-dark fz-12">0</span>
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
                    <a href="./">
                      <img src="img/logo-mini.png" alt="Moody" class="main-logo d-block d-md-block d-lg-none">
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
                    <span class="mini-cart-icon" data-count="1"></span>
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
                      <li class="menu-item-has-children mega-menu">
                        <a href="/catalog">
                          <span class="sub-arrow">+</span>
                          <span class="menu-item-title text-uppercase">БАДЫ</span>
                          <span class="toggle-sub-menu"> </span>
                        </a>
                        <ul class="sub-menu">
                          <li>
                            <div class="mega-menu-content">
                              <div class="row">
                                <div class="col-sm-4">
                                  <ul class="menu">
                                    <li><a href="creative-agency.html">Creative Agency</a></li>
                                    <li><a href="./">SEO Marketing<span class="menu-item-feature"></span></a></li>
                                    <li><a href="business-corporate.html">Business Corporate<span class="menu-item-feature"></span></a></li>
                                  </ul>
                                </div>
                                <div class="col-sm-4">
                                  <ul class="menu">
                                    <li><a href="multipurpose.html">Multipurpose<span class="menu-item-feature"></span></a></li>
                                    <li><a href="app-mobile.html">App Mobile</a></li>
                                </div>
                                <div class="col-sm-4">
                                  <ul class="menu">
                                    <li><a href="modern.html">Modern<span class="menu-item-feature"></span></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children">
                        <a href="#">
                          <span class="sub-arrow">+</span>
                          <span class="menu-item-title text-uppercase">ВИТАМИНЫ</span>
                          <span class="toggle-sub-menu"> </span>
                        </a>
                        <ul class="sub-menu">
                          <li><a href="about-me.html">About Me</a></li>
                          <li><a href="about-me-2.html">About Me 2</a></li>
                          <li><a href="about-us-1.html">About Us 1</a></li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children mega-menu">
                        <a href="#">
                          <span class="sub-arrow">+</span>
                          <span class="menu-item-title text-uppercase">СПОРТ. ПИТАНИЕ</span>
                          <span class="toggle-sub-menu"> </span>
                        </a>
                        <ul class="sub-menu">
                          <li>
                            <div class="mega-menu-content">
                              <div class="row">
                                <div class="col-sm-3">
                                  <ul class="menu">
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="charts.html">Charts</a></li>
                                    <li><a href="google-map.html">Google Map</a></li>
                                  </ul>
                                </div>
                                <div class="col-sm-3">
                                  <ul class="menu">
                                    <li><a href="light-gallery.html">Light Gallery</a></li>
                                    <li><a href="gradation.html">Gradation</a></li>
                                    <li><a href="rows-columns.html">Rows &amp; Columns</a></li>
                                  </ul>
                                </div>
                                <div class="col-sm-3">
                                  <ul class="menu">
                                    <li><a href="timeline.html">Timeline</a></li>
                                    <li><a href="icon-boxes.html">Icon Boxes</a></li>
                                    <li><a href="info-boxes.html">Info Boxes</a></li>
                                  </ul>
                                </div>
                                <div class="col-sm-3">
                                  <ul class="menu">
                                    <li><a href="popup-video.html">Popup Video</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children">
                        <a href="#">
                          <span class="sub-arrow">+</span>
                          <span class="menu-item-title text-uppercase">ТРАВЫ И ЧАИ</span>
                          <span class="toggle-sub-menu"> </span>
                        </a>
                        <ul class="sub-menu">
                          <li><a href="blog-standard.html">Blog Standard</a></li>
                          <li class="menu-item-has-children">
                            <a href="#">
                              <span class="sub-arrow">+</span>
                              <span class="menu-item-title text-uppercase">Blog Grid</span>
                              <span class="toggle-sub-menu"> </span>
                            </a>
                            <ul class="sub-menu">
                              <li><a href="blog-grid-with-post-format.html">3 Columns</a></li>
                              <li><a href="blog-grid-with-sidebar.html">With Sidebar</a></li>
                            </ul>
                          </li>
                          <li><a href="blog-grid-overlay-image.html">Blog Grid Overlay Image</a></li>
                          <li><a href="blog-grid-classic.html">Blog Grid Classic</a></li>
                          <li><a href="blog-grid-simple.html">Blog Grid Simple</a></li>
                          <li class="menu-item-has-children">
                            <a href="#">
                              <span class="sub-arrow">+</span>
                              <span class="menu-item-title text-uppercase">Single</span>
                              <span class="toggle-sub-menu"> </span>
                            </a>
                            <ul class="sub-menu">
                              <li><a href="blog-detail-left-sidebar.html">Blog Left Sidebar</a></li>
                              <li><a href="blog-detail-right-sidebar.html">Blog Right Sidebar</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li >
                        <a href="/"> <span class="text-uppercase">ПРОДУКТЫ</span> </a>
                      </li>
                      <li >
                        <a href="/"> <span class="text-uppercase">КРАСОТА И УХОД</span> </a>
                      </li>
                      <li >
                        <a href="/"> <span class="text-uppercase">ДУХИ</span> </a>
                      </li>
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
          <a href="./">
            <img src="img/logo-mini.png" alt=""/>
          </a>
        </div>
        <div id="page-close-mobile-menu" class="page-close-mobile-menu">
          <div><i></i></div>
        </div>
      </div>
      <ul class="mobile-menu">
        <li>
          <a href="javascript:void(0)">
            <span class="menu-item-title">БАДЫ</span>
            <span class="toggle-sub-menu"> </span>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="javascript:void(0)">
                <span class="menu-item-title">Home 1</span>
                <span class="toggle-sub-menu"> </span>
              </a>
              <ul class="sub-menu">
                <li><a href="creative-agency.html">Creative Agency</a></li>
                <li><a href="modern-agency.html">Modern Agency</a></li>
                <li><a href="marketing-agency.html">Marketing Agency</a></li>
                <li><a href="creative-studio.html">Creative Studio</a></li>
                <li><a href="start-up.html">Start Up</a></li>
              </ul>
            </li>
            <li>
              <a href="javascript:void(0)">
                <span class="menu-item-title">Home 2</span>
                <span class="toggle-sub-menu"> </span>
              </a>
              <ul class="sub-menu">
                <li><a href="multipurpose.html">Multipurpose</a></li>
                <li><a href="app-mobile.html">App Mobile</a></li>
                <li><a href="restaurant.html">Restaurant</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:void(0)">
            <span class="menu-item-title">ВИТАМИНЫ</span>
            <span class="toggle-sub-menu"> </span>
          </a>
          <ul class="sub-menu">
            <li><a href="about-me.html">About Me</a></li>
            <li><a href="about-me-2.html">About Me 2</a></li>
            <li><a href="about-us-1.html">About Us 1</a></li>
            <li><a href="about-us-2.html">About Us 2</a></li>
          </ul>
        </li>
        <li>
          <a href="javascript:void(0)">
            <span class="menu-item-title">СПОРТ. ПИТАНИЕ</span>
            <span class="toggle-sub-menu"> </span>
          </a>
          <ul class="sub-menu">
            <li><a href="about-me.html">About Me</a></li>
            <li><a href="about-me-2.html">About Me 2</a></li>
            <li><a href="about-us-1.html">About Us 1</a></li>
            <li><a href="about-us-2.html">About Us 2</a></li>
          </ul>
        </li>
        <li>
          <a class="pt-2" href="/login">ВОЙТИ <i class="icon-user"></i></a>
        </li>
      </ul>
    </nav>

    <!-- SEARCH -->
    <section class="widget widget_search custom_search d-block d-sm-none">
      <form class="search-form" action="">
        <input type="search" class="search-field" placeholder="Поиск..." value="" name="s" />
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
                  <a href="/detail" class="d-inline-block"><img class="mr-1 ml-1" src="img/shop/shop_80x100.jpg" alt=""></a>
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
                  <a href="/detail" class="d-inline-block"><img class="mr-1 ml-1" src="img/shop/shop_80x100.jpg" alt=""></a>
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
              <h2 class="widgettitle color">INFOMATION</h2>
              <img src="img/logo-brand-130x55.png" alt="" />
              <div class="mb-3"></div>
              <p class="lh-32"> 3rd Avenue, Stockholm<br />+1 800 977 78 80<br />info@boolondon.com</p>
              <p> Copyright © 2018 Moody Theme</p>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <h2 class="widgettitle color mb-3"> PAGES</h2>
            <ul class="style-2">
              <li class="item">
                <a href="#" class="link"> <span class="link-text">Twitter</span> </a>
              </li>
              <li class="item">
                <a href="#" class="link"> <span class="link-text">Facebook</span> </a>
              </li>
              <li class="item">
                <a href="#" class="link"> <span class="link-text">Google+</span> </a>
              </li>
              <li class="item">
                <a href="#" class="link"> <span class="link-text">Linkedin</span> </a>
              </li>
              <li class="item">
                <a href="#" class="link"> <span class="link-text">Pinterest</span> </a>
              </li>
            </ul>
          </div>
          <div class="col-sm-3 col-lg-3">
            <h2 class="widgettitle color mb-3"> FOLLOW US</h2>
            <ul class="style-2">
              <li class="item">
                <a href="#" class="link"> <span class="link-text">Twitter</span> </a>
              </li>
              <li class="item">
                <a href="#" class="link"> <span class="link-text">Facebook</span> </a>
              </li>
              <li class="item">
                <a href="#" class="link"> <span class="link-text">Google+</span> </a>
              </li>
              <li class="item">
                <a href="#" class="link"> <span class="link-text">Linkedin</span> </a>
              </li>
              <li class="item">
                <a href="#" class="link"> <span class="link-text">Pinterest</span> </a>
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
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/modernizr-2.7.1.min.js"></script>
  <!-- <script src="js/owl.carousel.min.js"></script> -->
  <script src="js/headroom.min.js"></script>
  <script src="js/jQuery.headroom.js"></script>
  <!-- <script src="js/jquery.counterup.min.js"></script> -->

  <!-- Waypoints is the easiest way to trigger a function when you scroll to an element. -->
  <!-- <script src="js/waypoints.min.js"></script> -->

  <!-- <script src="js/circle-progress.min.js"></script> -->
  <!-- <script src="js/pie-chart.js"></script> -->
  <script src="js/script.js"></script>

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
