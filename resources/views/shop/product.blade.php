@extends('layout-shop')

@section('title_description', $product->title_description)

@section('meta_description', $product->meta_description)

@section('head')
  <!-- Core CSS file -->
  <link rel="stylesheet" href="/bower_components/photoswipe/dist/photoswipe.css"> 

  <!-- Skin CSS file (styling of UI - buttons, caption, etc.)
       In the folder of skin CSS file there are also:
       - .png and .svg icons sprite, 
       - preloader.gif (for browsers that do not support CSS animations) -->
  <link rel="stylesheet" href="/bower_components/photoswipe/dist/default-skin/default-skin.css">
@endsection

@section('content')

  @if($product->background == NULL)
    @include('partials.breadcrumb', [$category, 'title_current' => $product->title])
  @else
    <section class="page-title-bar page-title-bar-04">
      <div class="page-title-bar-overlay" style="background-image: url(/img/products/{{ $product->path }}/{{ $product->background }}); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
      <div class="page-title-bar-inner">
        <div class="container">
          <div class="row row-xs-center">
            <div class="col-md-12">
              <div class="page-title-bar-heading">
                <h1 class="heading" style="text-align:{{ $product->direction }}; color:{{ $product->color }}; text-shadow: 0px 0px 6px #000000;">{{ $product->title_extra }}</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-breadcrumb">
        <ul class="breadcrumb bg-light pl-1 pr-1">
          <li><a href="/">Главная</a></li>
          @foreach ($category->ancestors as $ancestor)
            @unless($ancestor->parent_id != NULL && $ancestor->children->count() > 0)
              <li><a href="/catalog/{{ $ancestor->slug . '/' . $ancestor->id }}">{{ $ancestor->title }}</a></li>
            @endunless
            <li><a href="/catalog/{{ $ancestor->slug  .'/'.$category->slug . '/' . $category->id }}">{{ $category->title }}</a></li>
          @endforeach
          <li class="sub tail current">{{ $product->title }}</li>
        </ul>
      </div>
    </section>
  @endif

  <section class="section pt-6 pb-6">
    <div class="container">
      <div class="row">
        <div class="col-md-1 pr-0 d-none d-sm-block">
          <ol class="list-unstyled- list-inline-">
            @if ($product->images != '')
              <?php $images = unserialize($product->images); ?>
              @foreach ($images as $k => $image)
                <li data-target="#carouselIndicators" data-slide-to="{{ $k }}" @if($k == 0) class="active" @endif>
                  <a href="#" class="thumbnail"><img src="/img/products/{{ $product->path.'/'.$images[$k]['mini_image'] }}" alt="{{ $product->title }}"></a>
                </li><br>
              @endforeach
            @else
              <li data-target="#carouselIndicators" data-slide-to="0">
                <a href="#" class="thumbnail"><img src="/img/shop/shop_80x100.jpg" alt="" /></a>
              </li>
            @endif
          </ol>
        </div>

        <div class="col-md-5">
          <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <div class="offer">
              @foreach($product->modes as $m)
                @if(in_array($m->slug, ['recommend', 'novelty', 'best-price', 'stock', 'plus-gift']))
                  <div class="offer-{{ $m->slug }}">{{ $m->title }}</div>
                @endif
              @endforeach
            </div>
            <div class="carousel-inner my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
              @if ($product->images != '')
                @foreach ($images as $k => $image)
                  <figure class="carousel-item @if($k == 0) active @endif" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                    <a href="/img/products/{{ $product->path.'/'.$images[$k]['image'] }}" class="mfp-image gallery-item" itemprop="contentUrl" data-size="700x850">
                      <img src="/img/products/{{ $product->path.'/'.$images[$k]['image'] }}" itemprop="thumbnail" alt="{{ $product->title }}">
                    </a>
                  </figure>
                @endforeach
              @else
                <div class="carousel-item">
                  <a href="/img/shop/shop_707x954.jpg" class="mfp-image gallery-item"><img src="/img/shop/shop_707x954.jpg" alt="" /></a>
                </div>
              @endif
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
            <h2 class="product-title heading fw-normal fz-35 mb-3">{{ $product->title }}</h2>
            <div class="mb-3">{!! $product->characteristic !!}</div>
            <h3>{{ $product->price }}〒</h3>
            <div class="star-rating">
              <span style="width:100%"></span>
            </div>

            <form class="cart" method="get" action="/add-to-cart/{{ $product->id }}">
              <?php $items = session('items'); ?>
              @if (is_array($items) AND isset($items['products_id'][$product->id]))
                <a href="/cart" class="button style-flat button-secondary" data-toggle="tooltip" data-placement="top" title="Перейти в корзину">Оплатить</a>
              @else
                <div class="quantity">
                  <div class="noo-quantity-attr">
                    <button class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) && qty > 1 ) qty_el.value--; return false;" type="button">-</button>
                    <input id="qty" type="text" name="quantity" value="1" class="input-text qty text" size="4" />
                    <button class="qty-increase" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++; return false;" type="button">+</button>
                  </div>
                </div>
                <button type="button" class="button style-flat button-primary" data-product-id="{{ $product->id }}" onclick="addToCart(this);" title="Добавить в корзину">В корзину</button>
              @endif
            </form>
            <div class="product-meta">
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
                    <a class="active" href="#tab-content-1" data-toggle="tab">Описание</a>
                  </li>
                  <li>
                    <a href="#tab-content-2" data-toggle="tab">Комментарии</a>
                  </li>
                </ul>
              </div>
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active fade show" id="tab-content-1">
                  <div class="offset-md-1- col-md-12">
                    {!! $product->description !!}
                  </div>
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
              <h3 class="related-title">Похожие продукты</h3>
              <div class="row">
                @foreach ($products as $product)
                  <div class="col-6 col-sm-6 col-lg-3">
                    <div class="product-item shadow-sm pb-2">
                      <div class="product-thumbnail">
                        <a href="/product/{{ $product->slug }}">
                          <img src="/img/products/{{ $product->path.'/'.$product->image }}" alt="{{ $product->category->title }}">
                        </a>
                        <div class="offer">
                          @foreach($product->modes as $m)
                            @if(in_array($m->slug, ['advice', 'novelty', 'best-price', 'stock', 'plus-gift']))
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Root element of PhotoSwipe. Must have class pswp. -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
       It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

      <!-- Container that holds slides. 
        PhotoSwipe keeps only 3 of them in the DOM to save memory.
        Don't modify these 3 pswp__item elements, data is added later on. -->
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>

      <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
      <div class="pswp__ui pswp__ui--hidden">

        <div class="pswp__top-bar">

          <!--  Controls are self-explanatory. Order can be changed. -->

          <div class="pswp__counter"></div>

          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
          <button class="pswp__button pswp__button--share" title="Share"></button>
          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

          <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
          <!-- element will get class pswp__preloader--active when preloader is running -->
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
              <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div> 
        </div>

        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

        <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="/bower_components/photoswipe/dist/photoswipe.min.js"></script> 
  <script src="/bower_components/photoswipe/dist/photoswipe-ui-default.min.js"></script>

  <script>
    var initPhotoSwipeFromDOM = function(gallerySelector) {

      // parse slide data (url, title, size ...) from DOM elements 
      // (children of gallerySelector)
      var parseThumbnailElements = function(el) {
        var thumbElements = el.childNodes,
          numNodes = thumbElements.length,
          items = [],
          figureEl,
          linkEl,
          size,
          item;

        for(var i = 0; i < numNodes; i++) {

          figureEl = thumbElements[i]; // <figure> element

          // include only element nodes 
          if(figureEl.nodeType !== 1) {
            continue;
          }

          linkEl = figureEl.children[0]; // <a> element

          size = linkEl.getAttribute('data-size').split('x');

          // create slide object
          item = {
            src: linkEl.getAttribute('href'),
            w: parseInt(size[0], 10),
            h: parseInt(size[1], 10)
          };



          if(figureEl.children.length > 1) {
            // <figcaption> content
            item.title = figureEl.children[1].innerHTML; 
          }

          if(linkEl.children.length > 0) {
            // <img> thumbnail element, retrieving thumbnail url
            item.msrc = linkEl.children[0].getAttribute('src');
          } 

          item.el = figureEl; // save link to element for getThumbBoundsFn
          items.push(item);
        }

        return items;
      };

      // find nearest parent element
      var closest = function closest(el, fn) {
        return el && ( fn(el) ? el : closest(el.parentNode, fn) );
      };

      // triggers when user clicks on thumbnail
      var onThumbnailsClick = function(e) {
        e = e || window.event;
        e.preventDefault ? e.preventDefault() : e.returnValue = false;

        var eTarget = e.target || e.srcElement;

        // find root element of slide
        var clickedListItem = closest(eTarget, function(el) {
          return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
        });

        if(!clickedListItem) {
          return;
        }

        // find index of clicked item by looping through all child nodes
        // alternatively, you may define index via data- attribute
        var clickedGallery = clickedListItem.parentNode,
          childNodes = clickedListItem.parentNode.childNodes,
          numChildNodes = childNodes.length,
          nodeIndex = 0,
          index;

        for (var i = 0; i < numChildNodes; i++) {
          if(childNodes[i].nodeType !== 1) { 
            continue; 
          }

          if(childNodes[i] === clickedListItem) {
            index = nodeIndex;
            break;
          }
          nodeIndex++;
        }



        if(index >= 0) {
          // open PhotoSwipe if valid index found
          openPhotoSwipe( index, clickedGallery );
        }
        return false;
      };

      // parse picture index and gallery index from URL (#&pid=1&gid=2)
      var photoswipeParseHash = function() {
        var hash = window.location.hash.substring(1),
        params = {};

        if(hash.length < 5) {
          return params;
        }

        var vars = hash.split('&');
        for (var i = 0; i < vars.length; i++) {
          if(!vars[i]) {
            continue;
          }
          var pair = vars[i].split('=');  
          if(pair.length < 2) {
            continue;
          }           
          params[pair[0]] = pair[1];
        }

        if(params.gid) {
          params.gid = parseInt(params.gid, 10);
        }

        return params;
      };

      var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
        var pswpElement = document.querySelectorAll('.pswp')[0],
          gallery,
          options,
          items;

        items = parseThumbnailElements(galleryElement);

        // define options (if needed)
        options = {

          // define gallery index (for URL)
          galleryUID: galleryElement.getAttribute('data-pswp-uid'),

          getThumbBoundsFn: function(index) {
            // See Options -> getThumbBoundsFn section of documentation for more info
            var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
              pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
              rect = thumbnail.getBoundingClientRect(); 

            return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
          }

        };

        // PhotoSwipe opened from URL
        if(fromURL) {
          if(options.galleryPIDs) {
            // parse real index when custom PIDs are used 
            // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
            for(var j = 0; j < items.length; j++) {
              if(items[j].pid == index) {
                options.index = j;
                break;
              }
            }
          } else {
            // in URL indexes start from 1
            options.index = parseInt(index, 10) - 1;
          }
        } else {
          options.index = parseInt(index, 10);
        }

        // exit if index not found
        if( isNaN(options.index) ) {
          return;
        }

        if(disableAnimation) {
          options.showAnimationDuration = 0;
        }

        // Pass data to PhotoSwipe and initialize it
        gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
      };

      // loop through all gallery elements and bind events
      var galleryElements = document.querySelectorAll( gallerySelector );

      for(var i = 0, l = galleryElements.length; i < l; i++) {
        galleryElements[i].setAttribute('data-pswp-uid', i+1);
        galleryElements[i].onclick = onThumbnailsClick;
      }

      // Parse URL and open gallery if it contains #&pid=3&gid=1
      var hashData = photoswipeParseHash();
      if(hashData.pid && hashData.gid) {
        openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
      }
    };

    // execute above function
    initPhotoSwipeFromDOM('.my-gallery');
  </script>

  <script>
    function addToCart(i) {

      var productId = $(i).data("product-id");
      var quantity_el = document.getElementById('qty');
      var quantity = quantity_el.value;

      if (productId != '') {
        $.ajax({
          type: "get",
          url: '/add-to-cart/'+productId,
          dataType: "json",
          data: {"quantity": quantity},
          success: function(data) {
            $('*[data-product-id="'+productId+'"]').replaceWith('<a href="/cart" class="button style-flat button-secondary">Оплатить</a>');
            $('#count-items').text(data.countItems);
            $('#modalCart').modal('show');
          }
        });
      } else {
        alert("Ошибка сервера");
      }
    }
  </script>
@endsection