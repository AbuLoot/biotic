@extends('layout-shop')

@section('title_description', 'Biotic - Продукты долголетия')

@section('meta_description', 'Торговая компания “Biotic” специализируется на продаже высококачественных, натуральных продуктов для здоровья и красоты. Оптово-розничные продажи БАДов, витаминов, трав, спортивного питания, натуральной пищи, ароматов, средств для гигиены и ухода.')

@section('head')
  <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" media="all"/>
@endsection

@section('content')
  <section class="page-title-bar page-title-bar-04">
    <div class="page-title-bar-overlay"></div>
    <div class="page-title-bar-inner">
      <div class="container">
        <div class="row row-xs-center">
          <div class="col-md-12">
            <div class="page-title-bar-heading">
              <h1 class="heading">Shop Detail</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-breadcrumb">
      <ul class="breadcrumb">
        <li><a href="./">Home</a></li>
        <li class="sub tail current">Shop Detail</li>
      </ul>
    </div>
  </section>

  <section class="section pt-6 pb-6">
    <div class="container">
      <div class="row">
        <div class="col-md-1 pr-0 d-none d-sm-block">
          <ol class="list-unstyled- list-inline-">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active">
              <a href="#" class="thumbnail"><img src="img/shop/shop_80x100.jpg" alt="" /></a>
            </li><br>
            <li data-target="#carouselIndicators" data-slide-to="1">
              <a href="#" class="thumbnail"><img src="img/shop/shop_80x100.jpg" alt="" /></a>
            </li>
          </ol>
        </div>
        <div class="col-md-5">
          <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item  active">
                <a href="img/shop/shop_707x954.jpg" class="mfp-image gallery-item"><img src="img/shop/shop_707x954.jpg" alt="" /></a>
              </div>
              <div class="carousel-item">
                <a href="img/shop/shop_707x954.jpg" class="mfp-image gallery-item"><img src="img/shop/shop_707x954.jpg" alt="" /></a>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-md-6">          
          <div class="summary">
            <h1 class="product-title heading fw-normal fz-35 mb-3">Black Leather Jacket</h1>
            <div class="price">
              <del>&#36;211.00</del>
              <ins>&#36;199.00</ins>
            </div>
            <div class="star-rating">
              <span style="width:100%"></span>
            </div>
            <div class="description mb-3">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae tortor urna. Mauris non tincidunt ipsum, vel dignissim ipsum. Morbi erat sapien, hendrerit ut convallis eu, pretium eleifend sapien</p>
            </div>
            <form class="cart">
              <div class="quantity">
                <div class="noo-quantity-attr">
                  <button class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) && qty > 1 ) qty_el.value--;return false;" type="button">-</button>
                  <input id="qty" type="text" name="quantity" value="1" class="input-text qty text" size="4" />
                  <button class="qty-increase" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" type="button">+</button>
                </div>
              </div>
              <button type="button" onclick="addToCart(this)" data-cart-id="1" class="button style-flat button-primary">Add to cart</button>
            </form>
            <div class="product-meta">
              <span class="posted_in">
                Categories: <a href="#">Decor</a>, <a href="#">Dining Table</a>
              </span>
              <span class="tagged_as">
                Tags: <a href="#">dining table</a>, <a href="#">modern</a>
              </span>
            </div>
            <div class="noo-social-share">
              <span class="share-name">Share:</span>
              <a class="hint--bounce hint--bottom" aria-label="Facebook" href="https://facebook.com" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
              <a class="hint--bounce hint--bottom" aria-label="Twitter" href="https://twitter.com" target="_blank">
                <i class="fa fa-twitter"></i>
              </a>
              <a class="hint--bounce hint--bottom" aria-label="Instagram" href="https://www.instagram.com" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>
              <a class="hint--bounce hint--bottom" aria-label="Dribbble" href="https://www.dribbble.com" target="_blank">
                <i class="fa fa-dribbble"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="single-post single-product-bottom">
            <div class="commerce-tab tabs style-2 mb-4">
              <!-- Nav tabs -->
              <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs text-center">
                  <li>
                    <a class="active" href="#tab-content-1" data-toggle="tab">Description</a>
                  </li>
                  <li>
                    <a href="#tab-content-2" data-toggle="tab">Reviews</a>
                  </li>
                </ul>
              </div>
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active fade show" id="tab-content-1">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="tab-pane fade" id="tab-content-2">
                  <div class="comments-area">
                    <h3 class="comment-reply-title">Comments(4)</h3>
                    <ol class="comment-list">
                      <li class="comment">
                        <div class="comment-body">
                          <div class="author-avatar text-center">
                            <img alt="" src="images/avatar/avatar.png">
                          </div>
                          <div class="comment-wrap">
                            <div class="comment-header">
                              <h6 class="comment-author">Maria</h6>
                              <span class="comment-date extra-font dark">5 October 2016</span>
                            </div>
                            <div class="comment-content">
                              <p>
                                I’m partial to a Negroni and the occasional Martini. Particularly when they’re made with our No3 London Dry Gin by Alessandro Palazzi at Dukes Hotel opposite our St James’s Street shop.
                              </p>
                            </div>
                            <div class="reply">
                              <a class="comment-reply-link" href="#">Reply</a>
                            </div>
                          </div>
                        </div>
                        <ul class="children">
                          <li class="comment">
                            <div class="comment-body">
                              <div class="author-avatar text-center">
                                <img alt="" src="images/avatar/avatar.png">
                              </div>
                              <div class="comment-wrap">
                                <div class="comment-header">
                                  <h6 class="comment-author">Maria</h6>
                                  <span class="comment-date extra-font dark">5 October 2016</span>
                                </div>
                                <div class="comment-content">
                                  <p>
                                    I’m partial to a Negroni and the occasional Martini. Particularly when they’re made with our No3 London Dry Gin by Alessandro Palazzi at Dukes Hotel opposite our St James’s Street shop.
                                  </p>
                                </div>
                                <div class="reply">
                                  <a class="comment-reply-link" href="#">Reply</a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="comment">
                            <div class="comment-body">
                              <div class="author-avatar text-center">
                                <img alt="" src="images/avatar/avatar.png">
                              </div>
                              <div class="comment-wrap">
                                <div class="comment-header">
                                  <h6 class="comment-author">Maria</h6>
                                  <span class="comment-date extra-font dark">5 October 2016</span>
                                </div>
                                <div class="comment-content">
                                  <p>
                                    I’m partial to a Negroni and the occasional Martini. Particularly when they’re made with our No3 London Dry Gin by Alessandro Palazzi at Dukes Hotel opposite our St James’s Street shop.
                                  </p>
                                </div>
                                <div class="reply">
                                  <a class="comment-reply-link" href="#">Reply</a>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li class="comment">
                        <div class="comment-body">
                          <div class="author-avatar text-center">
                            <img alt="" src="images/avatar/avatar.png">
                          </div>
                          <div class="comment-wrap">
                            <div class="comment-header">
                              <h6 class="comment-author">Maria</h6>
                              <span class="comment-date extra-font dark">5 October 2016</span>
                            </div>
                            <div class="comment-content">
                              <p>
                                I’m partial to a Negroni and the occasional Martini. Particularly when they’re made with our No3 London Dry Gin by Alessandro Palazzi at Dukes Hotel opposite our St James’s Street shop.
                              </p>
                            </div>
                            <div class="reply">
                              <a class="comment-reply-link" href="#">Reply</a>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ol>
                    <div class="comment-form-wrap">
                      <div class="comment-respond">
                        <h3 class="comment-reply-title">Write a comment</h3>
                        <form class="comment-form">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-control-wrap your-name">
                                <input type="text" name="your-name" value="" size="40" class="form-text" placeholder="Your Name *">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-control-wrap your-email">
                                <input type="email" name="your-email" value="" size="40" class="form-text" placeholder="Your Email *">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-control-wrap your-message">
                                <textarea name="your-message" cols="40" rows="4" class="form-textarea" placeholder="Message"></textarea>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="text-center">
                                <input type="submit" value="Submit Now" class="submit button style-flat button-primary">
                              </div>
                            </div>
                          </div>
                        </form>
                      </div><!-- #respond -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- RELATED PRODUCTS -->
            <div class="related-posts-wrap">
              <h3 class="related-title">Related Products</h3>
              <div class="row">
                <div class="col-6 col-lg-3 col-sm-6">
                  <div class="product-item">
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
                <div class="col-6 col-lg-3 col-sm-6">
                  <div class="product-item">
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
                <div class="col-6 col-lg-3 col-sm-6">
                  <div class="product-item">
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
                <div class="col-6 col-lg-3 col-sm-6">
                  <div class="product-item">
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script>
    function addToCart(i) {
      var productId = $(i).data("cart-id");
      $('*[data-cart-id="'+productId+'"]').replaceWith('<a href="/cart" class="button style-flat button-secondary">Go to cart</a>');
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