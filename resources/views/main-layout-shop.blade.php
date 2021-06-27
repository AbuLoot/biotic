<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="author" content="biotic.company@gmail.com">
  <title>@yield('title_description', 'Biotic - Продукты долголетия')</title>
  <meta name="description" content="@yield('meta_description', 'Biotic - Продукты долголетия')">

  <!-- Favicons-->
  <link rel="shortcut icon" href="/new/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="/new/img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/new/img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/new/img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/new/img/apple-touch-icon-144x144-precomposed.png">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
  <link href="/new/css/bootstrap.custom.min.css" rel="stylesheet">
  <link href="/new/custom/style.css" rel="stylesheet">
  <link href="/new/custom/home_1.css" rel="stylesheet">
  <link href="/new/css/custom.css" rel="stylesheet">

  @yield('head')
</head>

<body>
  <div id="page">
    <header class="version_1">
      <div class="layer"></div><!-- Mobile menu overlay mask -->
      <div class="top_line version_1 plus_select">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-sm-6 col-5">Продукты долголетия</div>
            <div class="col-sm-6 col-7">
              <ul class="top_links">
                <li>
                  <div class="styled-select lang-selector">
                    <select>
                      <option value="English" selected>English</option>
                      <option value="French">French</option>
                      <option value="Spanish">Spanish</option>
                      <option value="Russian">Russian</option>
                    </select>
                  </div>
                </li>
                <li><div class="styled-select currency-selector">
                  <select>
                    <option value="US Dollars" selected="">US Dollars</option>
                    <option value="Euro">Euro</option>
                  </select>
                </div></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="main_header Sticky">
        <div class="container">
          <div class="row small-gutters">
            <div class="col-xl-2 col-lg-3 d-lg-flex align-items-center">
              <div id="logo">
                <a href="/shop"><img src="/new/img/brands/logo.png" alt="Biotic" width="auto" height="35"></a>
              </div>
            </div>
            <nav class="col-xl-8 col-lg-7">
              <a class="open_close" href="javascript:void(0);">
                <div class="hamburger hamburger--spin">
                  <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                  </div>
                </div>
              </a>
              <!-- Mobile menu button -->
              <div class="main-menu">
                <div id="header_menu">
                  <a href="/shop"><img src="/new/img/logo.png" alt="Biotic" width="auto" height="35"></a>
                  <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                </div>
                <ul>
                <?php $traverse = function ($categories, $parent = NULL) use (&$traverse) { ?>
                  <?php foreach ($categories as $category) : ?>
                    <?php if ($category->isRoot() && $category->descendants->count() == 0) : ?>
                      <li><a href="/c/{{ $category->slug.'/'.$category->id }}">{{ $category->title }}</a></li>
                    <?php elseif ($category->isRoot() && count($category->children) < 12) : ?>
                      <li class="submenu">
                        <a href="javascript:void(0);" class="show-submenu">{{ $category->title }}</a>
                        <ul>
                          <?php foreach ($category->children as $category_child) : ?>
                            <li><a href="/c/{{ $category_child->slug.'/'.$category_child->id }}">{{ $category_child->title }}</a></li>
                          <?php endforeach; ?>
                        </ul>
                      </li>
                    <?php elseif ($category->isRoot() && count($category->children) > 12) : ?>
                      <li class="submenu megamenu">
                        <a href="javascript:void(0);" class="show-submenu-mega">{{ $category->title }}</a>
                        <div class="menu-wrapper">
                          <div class="row small-gutters">
                            <?php if (count($category->children) >= 36) : ?>
                              <?php foreach ($category->children->chunk(4) as $chunk) : ?>
                                <div class="col-lg-3">
                                  <ul>
                                    <?php foreach ($chunk as $category_child) : ?>
                                      <li><a href="/c/{{ $category_child->slug.'/'.$category_child->id }}">{{ $category_child->title }}</a></li>
                                    <?php endforeach; ?>
                                  </ul>
                                </div>
                              <?php endforeach; ?>
                            <?php elseif (count($category->children) >= 12) : ?>
                              <?php foreach ($category->children->chunk(3) as $chunk) : ?>
                                <div class="col-lg-4">
                                  <ul>
                                    <?php foreach ($chunk as $category_child) : ?>
                                      <li><a href="/c/{{ $category_child->slug.'/'.$category_child->id }}">{{ $category_child->title }}</a></li>
                                    <?php endforeach; ?>
                                  </ul>
                                </div>
                              <?php endforeach; ?>
                            <?php endif; ?>
                          </div>
                        </div>
                      </li>
                    <?php endif; ?>
                  <?php endforeach; ?>
                <?php }; ?>
                <?php $traverse($categories); ?>
                </ul>
              </div>
            </nav>
            <div class="col-xl-2 col-lg-2 d-lg-flex align-items-center justify-content-end text-right">
              <ul class="top_tools">
                <li>
                  <div class="dropdown dropdown-cart">
                    <a href="cart.html" class="cart_bt"><strong>2</strong></a>
                    <div class="dropdown-menu">
                      <ul>
                        <li>
                          <a href="product-detail-1.html">
                            <figure><img src="/new/img/products/product_placeholder_square_small.jpg" data-src="/new/img/products/shoes/thumb/1.jpg" alt="" width="50" height="50" class="lazy"></figure>
                            <strong><span>1x Armor Air x Fear</span>$90.00</strong>
                          </a>
                          <a href="#0" class="action"><i class="ti-trash"></i></a>
                        </li>
                        <li>
                          <a href="product-detail-1.html">
                            <figure><img src="/new/img/products/product_placeholder_square_small.jpg" data-src="/new/img/products/shoes/thumb/2.jpg" alt="" width="50" height="50" class="lazy"></figure>
                            <strong><span>1x Armor Okwahn II</span>$110.00</strong>
                          </a>
                          <a href="0" class="action"><i class="ti-trash"></i></a>
                        </li>
                      </ul>
                      <div class="total_drop">
                        <div class="clearfix"><strong>Total</strong><span>$200.00</span></div>
                        <a href="cart.html" class="btn_1 outline">View Cart</a><a href="checkout.html" class="btn_1">Checkout</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <a href="#0" class="wishlist"><span>Wishlist</span></a>
                </li>
                <li>
                  <div class="dropdown dropdown-access">
                    <a href="account.html" class="access_link"><span>Account</span></a>
                    <div class="dropdown-menu">
                      <a href="account.html" class="btn_1">Sign In or Sign Up</a>
                      <ul>
                        <li>
                          <a href="track-order.html"><i class="ti-truck"></i>Track your Order</a>
                        </li>
                        <li>
                          <a href="account.html"><i class="ti-package"></i>My Orders</a>
                        </li>
                        <li>
                          <a href="account.html"><i class="ti-user"></i>My Profile</a>
                        </li>
                        <li>
                          <a href="help.html"><i class="ti-help-alt"></i>Help and Faq</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <a href="javascript:void(0);" class="search_panel"><span>Search</span></a>
                </li>
              
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="top_panel">
      <div class="container header_panel">
        <a href="#0" class="btn_close_top_panel"><i class="ti-close"></i></a>
        <small>What are you looking for?</small>
      </div>
      
      <div class="container">
        <div class="search-input">
            <input type="text" placeholder="Search over 10.000 products...">
            <button type="submit"><i class="ti-search"></i></button>
          </div>
      </div>
    </div>

    <main>
      <!-- Dinamic content -->
      @yield('content')
    </main>

    <footer class="revealed-">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <h3 data-target="#collapse_1">Quick Links</h3>
            <div class="collapse dont-collapse-sm links" id="collapse_1">
              <ul>
                <li><a href="about.html">About us</a></li>
                <li><a href="help.html">Faq</a></li>
                <li><a href="help.html">Help</a></li>
                <li><a href="account.html">My account</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contacts.html">Contacts</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h3 data-target="#collapse_2">Categories</h3>
            <div class="collapse dont-collapse-sm links" id="collapse_2">
              <ul>
                <li><a href="listing-grid-1-full.html">Clothes</a></li>
                <li><a href="listing-grid-2-full.html">Electronics</a></li>
                <li><a href="listing-grid-1-full.html">Furniture</a></li>
                <li><a href="listing-grid-3.html">Glasses</a></li>
                <li><a href="listing-grid-1-full.html">Shoes</a></li>
                <li><a href="listing-grid-1-full.html">Watches</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
              <h3 data-target="#collapse_3">Contacts</h3>
            <div class="collapse dont-collapse-sm contacts" id="collapse_3">
              <ul>
                <li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
                <li><i class="ti-headphone-alt"></i>+94 423-23-221</li>
                <li><i class="ti-email"></i><a href="#0">info@allaia.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
              <h3 data-target="#collapse_4">Keep in touch</h3>
            <div class="collapse dont-collapse-sm" id="collapse_4">
              <div id="newsletter">
                <div class="form-group">
                  <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                  <button type="submit" id="submit-newsletter"><i class="ti-angle-double-right"></i></button>
                </div>
              </div>
              <div class="follow_us">
                <h5>Follow Us</h5>
                <ul>
                  <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/new/img/twitter_icon.svg" alt="" class="lazy"></a></li>
                  <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/new/img/facebook_icon.svg" alt="" class="lazy"></a></li>
                  <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/new/img/instagram_icon.svg" alt="" class="lazy"></a></li>
                  <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/new/img/youtube_icon.svg" alt="" class="lazy"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row add_bottom_25">
          <div class="col-lg-6">
            <ul class="footer-selector clearfix">
              <li>
                <div class="styled-select lang-selector">
                  <select>
                    <option value="English" selected>English</option>
                    <option value="French">French</option>
                    <option value="Spanish">Spanish</option>
                    <option value="Russian">Russian</option>
                  </select>
                </div>
              </li>
              <li>
                <div class="styled-select currency-selector">
                  <select>
                    <option value="US Dollars" selected>US Dollars</option>
                    <option value="Euro">Euro</option>
                  </select>
                </div>
              </li>
              <li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/new/img/cards_all.svg" alt="" width="198" height="30" class="lazy"></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="additional_links">
              <li><a href="#0">Terms and conditions</a></li>
              <li><a href="#0">Privacy</a></li>
              <li><span>© 2020 Allaia</span></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  
  <!-- Back to top button -->
  <div id="toTop"></div>

  <!-- COMMON SCRIPTS -->
  <script defer src="/new/js/common_scripts.min.js"></script>
  <script defer src="/new/js/main.js"></script>
  
  <!-- SPECIFIC SCRIPTS -->
  <script defer src="/new/js/carousel-home.js"></script>
  @yield('scripts')
</body>
</html>