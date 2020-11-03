<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
  <link rel="icon" href="/favicon.png" type="image/x-icon"/>
  <link rel="shortcut icon" href="/favicon.png" type="image/x-icon"/>
  <title>@yield('title_description', 'Biotic - Натуральные продукты')</title>
  <meta name="description" content="@yield('meta_description', 'Торговая компания “Biotic” специализируется на продаже высококачественных, натуральных продуктов для здоровья и красоты. Оптово-розничные продажи БАДов, витаминов, трав, спортивного питания, натуральной пищи, ароматов, средств для гигиены и ухода.')">
  <meta name="yandex-verification" content="d2620ce1d90694d6" />

  <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" media="all" />
  <link rel="stylesheet" href="/css/settings.css" type="text/css" media="all"/>
  <!-- <link rel="stylesheet" href="/css/simple-line-icons.css" type="text/css" media="all" /> -->
  <!-- <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css" media="all"/> -->
  <!-- <link rel="stylesheet" href="/css/owl.carousel.css" type="text/css" media="all"/> -->
  <!-- <link rel="stylesheet" href="/css/owl.theme.css" type="text/css" media="all"/> -->
  <!-- <link rel="stylesheet" href="/css/owl.transitions.css" type="text/css" media="all"/> -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="/css/custom.css" type="text/css" media="all"/>
  @yield('head')

  <!-- <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900%7CLibre+Baskerville:400,400i,700" rel="stylesheet"/> -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <!-- <div class="noo-spinner">
    <div class="spinner">
      <div class="cube1"></div>
      <div class="cube2"></div>
    </div>
  </div> -->

  <div class="site">
    <main id="main">

      <!-- <nav class="navbar fixed-top- navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a  class="navbar-brand biotic-logo" href="/promo">
            <img src="/img/logo.png" alt="Biotic">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto text-center">
              <li class="nav-item active">
                <a class="nav-link- white text-uppercase" href="/"><span class="mini-cart-icon"></span> Магазин <span class="sr-only">(current)</span></a>
              </li>
            </ul>
            <div class="header-social-networks  text-center-sm ml-auto fz-22">
              <a class="hint--bounce hint--bottom white" aria-label="Facebook" href="https://www.facebook.com/biotic.kz" target="_blank"><i class="fa fa-facebook"></i></a>
              <a class="hint--bounce hint--bottom white" aria-label="Instagram" href="https://www.instagram.com/biotic.kz" target="_blank"><i class="fa fa-instagram"></i></a>
              <a class="hint--bounce hint--bottom white" aria-label="Twitter" href="https://twitter.com/biotickz" target="_blank"><i class="fa fa-twitter"></i></a>
              <a class="hint--bounce hint--bottom white" aria-label="Youtube" href="https://www.youtube.com/channel/UC3h_DOXPPT1XXbkRz8zvaMQ" target="_blank"><i class="fa fa-youtube"></i></a>
              <a class="hint--bounce hint--bottom white" aria-label="Vkontakte" href="https://www.vk.com/biotic_kz" target="_blank"><i class="fa fa-vk"></i></a>
            </div>
          </div>
        </div>
      </nav> -->

      <!-- <section class="container-fluid mt-10 mb-10">
        <div class="row">
          <div class="col-md-12">
            <a href="/epimedium.php"><img src="/img/epimedium-1600.jpg" class="img-responsive pull-right"></a>
          </div>
          <div class="col-md-12">
            <a href="/collagen.php"><img src="/img/collagen-1600.jpg" class="img-responsive"></a>
          </div>
        </div>
      </section> -->

      @yield('content')

      <!-- Widget contact buttons -->
      <div class="material-button-anim">
        <ul class="list-inline" id="options">
          <li class="option">
            <button class="material-button option2 bg-whatsapp" type="button">
              <a href="whatsapp://send?phone=+77087181502" target="_blank">
                <!-- <span class="fa fa-whatsapp" aria-hidden="true"></span> -->
                <img src="/img/whatsapp.png">
              </a>
            </button>
          </li>
          <li class="option">
            <button class="material-button option3 bg-telegram" type="button">
              <a href="tg://resolve?domain=biotic_company" target="_blank">
                <!-- <span class="fa fa-telegram" aria-hidden="true"></span> -->
                <img src="/img/telegram.png">
              </a>
            </button>
          </li>
          <li class="option">
            <button class="material-button option4 bg-ripple" type="button">
              <a href="tel:+77087181502" target="_blank"><span class="fa fa-phone" aria-hidden="true"></span></a>
            </button>
          </li>
          <!-- <li class="option">
            <button class="material-button option4" type="button">
              <a href="mailto:biotic.company@gmail.com" target="_blank"><span class="fa fa-envelope" aria-hidden="true"></span></a>
            </button>
          </li> -->
        </ul>
        <button class="material-button material-button-toggle btnColorBg" type="button">
          <span class="fa fa-user" aria-hidden="true"></span>
          <span class="ripple btnColorBg"></span>
          <span class="ripple btnColorBg"></span>
          <span class="ripple btnColorBg"></span>
        </button>
      </div>
    </main>

    <footer class="footer bg-gray dark">
      <div class="footer-inner">
        <div class="container">
          <div class="row  pb-6">
            <div class="col-md-12">
              <div class="text-center">
                <h2 class="text-uppercase white-">Свяжитесь с нами</h2>
                <div class="mb-2"></div>
                <div class="branding__logo">
                  <a href="./"><img src="/img/logo-brand.png" alt="Biotic" class="main-logo" /></a>
                </div>
                <div class="mb-2"></div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="text-center-xs">
                <h4 class="white- mt-3"> Адрес</h4>
                <div class="mb-3"></div>
                <p class="fz-22">Республика Казахстан, город Алматы, улица Толе би 286/2, офис 401.</p>
                <p class="heading fz-22 fw-normal"> <a class="primary-color" href="mailto:biotic.company@gmail.com">biotic.company@gmail.com</a></p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="text-center-xs">
                <h4 class="white- mt-3"> Реквизиты</h4>
                <div class="mb-3"></div>
                <p class="fz-22">Компания ТОО &laquo;Biotic&raquo;</p>
                <p>БИН: 170 440 007 536</p>
                <p>ИИК: KZ139470398991749916 (тенге),<br>
                  ИИК: KZ919470643000346735 (рубль)</p>
                <p>АО ДБ «Альфа-Банк» г. Алматы<br> БИК банка ALFAKZKA</p>
                <p>KASPI: 5169 4931 9973 4057<br>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="text-center-xs">
                <h4 class="white- mt-3"> Номера телефонов</h4>
                <div class="mb-3"></div>
                <div class="phones mx-auto">
                  <a onclick="fbq('track', 'Contact');" href="tel:+77087181502" target="_top" data-attr="phone"><i class="fa fa-phone"></i> 8 (708) 718 1502</a>
                  <a onclick="fbq('track', 'Contact');" href="whatsapp://send?phone=+77087181502" target="_top" data-attr="whatsapp_call"><i class="fa fa-whatsapp"></i> 8 (708) 718 1502</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- MAP -->
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6bc3a0def06bc151d0400c33880107fc3aa3eb68f19082c16b09583225a7ada1&amp;width=100%25&amp;height=400&amp;lang=ru_UA&amp;scroll=false"></script>

      <div class="copyright-2 bg-black">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p class="mb-0"> Сайт зарезервирован компанией &laquo;Biotic&raquo;</p>
            </div>
            <div class="col-sm-6">
              <div class="text-right text-center-sm">
                <ul class="social-networks">
                  <li class="item">
                    <a class="link" aria-label="Youtube" href="https://www.youtube.com/channel/UC3h_DOXPPT1XXbkRz8zvaMQ" target="_blank"><i class="fa fa-youtube"></i></a>
                  </li>
                  <li class="item">
                    <a class="link" aria-label="Instagram" href="https://www.instagram.com/biotic.company" target="_blank"><i class="fa fa-instagram"></i></a>
                  </li>
                  <li class="item">
                    <a class="link" aria-label="Facebook" href="https://www.facebook.com/biotic.kz" target="_blank"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li class="item">
                    <a class="link" aria-label="Twitter" href="https://twitter.com/biotickz" target="_blank"><i class="fa fa-twitter"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- <a id="backtotop" class="scrollup scrollup--fixed"><i class="fa fa-angle-up"></i></a> -->  

  <!-- LOAD JQUERY LIBRARY -->
  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery-migrate.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/modernizr-2.7.1.min.js"></script>
  <!-- <script src="/js/headroom.min.js"></script> -->
  <!-- <script src="/js/jQuery.headroom.js"></script> -->
  <script src="/js/script.js"></script>

  <!-- <script src="/js/isotope.pkgd.min.js"></script> -->
  <!-- <script src="/js/jquery.isotope.init.js"></script> -->
  <!-- <script src="/js/imagesloaded.pkgd.min.js"></script> -->
  <!-- <script src="/js/jquery.magnific-popup.min.js"></script> -->
  <!-- <script src="/js/owl.carousel.min.js"></script> -->

  @yield('scripts')

</body>
</html>
