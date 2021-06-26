@extends('main-layout-shop')

@section('title_description', $product->title_description)

@section('meta_description', $product->meta_description)

@section('head')

  <!-- SPECIFIC CSS -->
  <link href="/new/css/product_page.css" rel="stylesheet">

@endsection

@section('content')

  <div class="container margin_30">
    <div class="countdown_inner">-20% This offer ends in <div data-countdown="2019/05/15" class="countdown"></div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="all">
          <div class="slider">
            <div class="owl-carousel owl-theme main">
              @if ($product->images != '')
                <?php $images = ($product->images == true) ? unserialize($product->images) : []; ?>
                @foreach ($images as $k => $image)
                  <div style="background-image: url(/img/products/{{ $product->path.'/'.$images[$k]['image'] }});" class="item-box"></div>
                @endforeach
              @else
                <a href="/img/products/product-16-1.jpg" target="_blank">
                  <img src="/img/products/product-16-1.jpg" alt="">
                </a>
              @endif
            </div>
            <div class="left nonl"><i class="ti-angle-left"></i></div>
            <div class="right"><i class="ti-angle-right"></i></div>
          </div>
          <div class="slider-two">
            <div class="owl-carousel owl-theme thumbs">
              @if ($product->images != '')
                @foreach ($images as $k => $image)
                  <div style="background-image: url(/img/products/{{ $product->path.'/'.$images[$k]['mini_image'] }});" class="item <?php if ($k == 0) echo 'active'; ?>"></div>
                @endforeach
              @endif
            </div>
            <div class="left-t nonl-t"></div>
            <div class="right-t"></div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="breadcrumbs">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li>Page active</li>
          </ul>
        </div>
        <!-- /page_header -->
        <div class="prod_info">
          <h1>{{ $product->title }}</h1>
          <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i><em>4 reviews</em></span>
          <p><small>SKU: MTKRY-001</small><br>Sed ex labitur adolescens scriptorem. Te saepe verear tibique sed. Et wisi ridens vix, lorem iudico blandit mel cu. Ex vel sint zril oportere, amet wisi aperiri te cum.</p>
          <div class="prod_options">
            <div class="row">
              <label class="col-xl-5 col-lg-5  col-md-6 col-6 pt-0"><strong>Color</strong></label>
              <div class="col-xl-4 col-lg-5 col-md-6 col-6 colors">
                <ul>
                  <li><a href="#0" class="color color_1 active"></a></li>
                  <li><a href="#0" class="color color_2"></a></li>
                  <li><a href="#0" class="color color_3"></a></li>
                  <li><a href="#0" class="color color_4"></a></li>
                </ul>
              </div>
            </div>
            <div class="row">
              <label class="col-xl-5 col-lg-5 col-md-6 col-6"><strong>Size</strong> - Size Guide <a href="#0" data-toggle="modal" data-target="#size-modal"><i class="ti-help-alt"></i></a></label>
              <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                <div class="custom-select-form">
                  <select class="wide">
                    <option value="" selected>Small (S)</option>
                    <option value="">M</option>
                    <option value=" ">L</option>
                    <option value=" ">XL</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-xl-5 col-lg-5  col-md-6 col-6"><strong>Quantity</strong></label>
              <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                <div class="numbers-row">
                  <input type="text" value="1" id="quantity_1" class="qty2" name="quantity_1">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-5 col-md-6">
              <div class="price_main"><span class="new_price">{{ $product->price }}₸</span><span class="percentage">-20%</span> <span class="old_price">$160.00</span></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="btn_add_to_cart"><a href="#0" class="btn_1">Add to Cart</a></div>
            </div>
          </div>
        </div>
        <!-- /prod_info -->
        <div class="product_actions">
          <ul>
            <li>
              <a href="#"><i class="ti-heart"></i><span>Add to Wishlist</span></a>
            </li>
            <li>
              <a href="#"><i class="ti-control-shuffle"></i><span>Add to Compare</span></a>
            </li>
          </ul>
        </div>
        <!-- /product_actions -->
      </div>
    </div>
    <!-- /row -->
  </div>

  <div class="tabs_product">
    <div class="container">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Description</a>
        </li>
        <li class="nav-item">
          <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Reviews</a>
        </li>
      </ul>
    </div>
  </div>

  <div class="tab_content_wrapper">
    <div class="container">
      <div class="tab-content" role="tablist">
        <div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
          <div class="card-header" role="tab" id="heading-A">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
                Description
              </a>
            </h5>
          </div>
          <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
            <div class="card-body">
              <div class="row justify-content-between">
                <div class="col-lg-6">
                  <h3>Details</h3>
                  <p>Lorem ipsum dolor sit amet, in eleifend <strong>inimicus elaboraret</strong> his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.</p>
                  <p>Vis ei ipsum conclusionemque. Te enim suscipit recusabo mea, ne vis mazim aliquando, everti insolens at sit. Cu vel modo unum quaestio, in vide dicta has. Ut his laudem explicari adversarium, nisl <strong>laboramus hendrerit</strong> te his, alia lobortis vis ea.</p>
                  <p>Perfecto eleifend sea no, cu audire voluptatibus eam. An alii praesent sit, nobis numquam principes ea eos, cu autem constituto suscipiantur eam. Ex graeci elaboraret pro. Mei te omnis tantas, nobis viderer vivendo ex has.</p>
                </div>
                <div class="col-lg-5">
                  <h3>Specifications</h3>
                  <div class="table-responsive">
                    <table class="table table-sm table-striped">
                      <tbody>
                        <tr>
                          <td><strong>Color</strong></td>
                          <td>Blue, Purple</td>
                        </tr>
                        <tr>
                          <td><strong>Size</strong></td>
                          <td>150x100x100</td>
                        </tr>
                        <tr>
                          <td><strong>Weight</strong></td>
                          <td>0.6kg</td>
                        </tr>
                        <tr>
                          <td><strong>Manifacturer</strong></td>
                          <td>Manifacturer</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /table-responsive -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /TAB A -->
        <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
          <div class="card-header" role="tab" id="heading-B">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                Reviews
              </a>
            </h5>
          </div>
          <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
            <div class="card-body">
              <div class="row justify-content-between">
                <div class="col-lg-6">
                  <div class="review_content">
                    <div class="clearfix add_bottom_10">
                      <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><em>5.0/5.0</em></span>
                      <em>Published 54 minutes ago</em>
                    </div>
                    <h4>"Commpletely satisfied"</h4>
                    <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="review_content">
                    <div class="clearfix add_bottom_10">
                      <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star empty"></i><i class="icon-star empty"></i><em>4.0/5.0</em></span>
                      <em>Published 1 day ago</em>
                    </div>
                    <h4>"Always the best"</h4>
                    <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>
                  </div>
                </div>
              </div>
              <!-- /row -->
              <div class="row justify-content-between">
                <div class="col-lg-6">
                  <div class="review_content">
                    <div class="clearfix add_bottom_10">
                      <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star empty"></i><em>4.5/5.0</em></span>
                      <em>Published 3 days ago</em>
                    </div>
                    <h4>"Outstanding"</h4>
                    <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="review_content">
                    <div class="clearfix add_bottom_10">
                      <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><em>5.0/5.0</em></span>
                      <em>Published 4 days ago</em>
                    </div>
                    <h4>"Excellent"</h4>
                    <p>Sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>
                  </div>
                </div>
              </div>
              <!-- /row -->
              <p class="text-right"><a href="leave-review.html" class="btn_1">Leave a review</a></p>
            </div>
            <!-- /card-body -->
          </div>
        </div>
        <!-- /tab B -->
      </div>
      <!-- /tab-content -->
    </div>
    <!-- /container -->
  </div>

  <div class="container margin_60_35">
    <div class="main_title">
      <h2>Related</h2>
      <span>Products</span>
      <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
    </div>
    <div class="owl-carousel owl-theme products_carousel">
      <div class="item">
        <div class="grid_item">
          <span class="ribbon new">New</span>
          <figure>
            <a href="product-detail-1.html">
              <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/4.jpg" alt="">
            </a>
          </figure>
          <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
          <a href="product-detail-1.html">
            <h3>ACG React Terra</h3>
          </a>
          <div class="price_box">
            <span class="new_price">$110.00</span>
          </div>
          <ul>
            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
          </ul>
        </div>
        <!-- /grid_item -->
      </div>
      <!-- /item -->
      <div class="item">
        <div class="grid_item">
          <span class="ribbon new">New</span>
          <figure>
            <a href="product-detail-1.html">
              <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/5.jpg" alt="">
            </a>
          </figure>
          <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
          <a href="product-detail-1.html">
            <h3>Air Zoom Alpha</h3>
          </a>
          <div class="price_box">
            <span class="new_price">$140.00</span>
          </div>
          <ul>
            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
          </ul>
        </div>
        <!-- /grid_item -->
      </div>
      <!-- /item -->
      <div class="item">
        <div class="grid_item">
          <span class="ribbon hot">Hot</span>
          <figure>
            <a href="product-detail-1.html">
              <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/8.jpg" alt="">
            </a>
          </figure>
          <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
          <a href="product-detail-1.html">
            <h3>Air Color 720</h3>
          </a>
          <div class="price_box">
            <span class="new_price">$120.00</span>
          </div>
          <ul>
            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
          </ul>
        </div>
        <!-- /grid_item -->
      </div>
      <!-- /item -->
      <div class="item">
        <div class="grid_item">
          <span class="ribbon off">-30%</span>
          <figure>
            <a href="product-detail-1.html">
              <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/2.jpg" alt="">
            </a>
          </figure>
          <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
          <a href="product-detail-1.html">
            <h3>Okwahn II</h3>
          </a>
          <div class="price_box">
            <span class="new_price">$90.00</span>
            <span class="old_price">$170.00</span>
          </div>
          <ul>
            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
          </ul>
        </div>
        <!-- /grid_item -->
      </div>
      <!-- /item -->
      <div class="item">
        <div class="grid_item">
          <span class="ribbon off">-50%</span>
          <figure>
            <a href="product-detail-1.html">
              <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/3.jpg" alt="">
            </a>
          </figure>
          <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
          <a href="product-detail-1.html">
            <h3>Air Wildwood ACG</h3>
          </a>
          <div class="price_box">
            <span class="new_price">$75.00</span>
            <span class="old_price">$155.00</span>
          </div>
          <ul>
            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
          </ul>
        </div>
        <!-- /grid_item -->
      </div>
      <!-- /item -->
    </div>
    <!-- /products_carousel -->
  </div>

  <div class="feat">
    <div class="container">
      <ul>
        <li>
          <div class="box">
            <i class="ti-gift"></i>
            <div class="justify-content-center">
              <h3>Free Shipping</h3>
              <p>For all oders over $99</p>
            </div>
          </div>
        </li>
        <li>
          <div class="box">
            <i class="ti-wallet"></i>
            <div class="justify-content-center">
              <h3>Secure Payment</h3>
              <p>100% secure payment</p>
            </div>
          </div>
        </li>
        <li>
          <div class="box">
            <i class="ti-headphone-alt"></i>
            <div class="justify-content-center">
              <h3>24/7 Support</h3>
              <p>Online top support</p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>


  <div class="top_panel">
    <div class="container header_panel">
      <a href="#0" class="btn_close_top_panel"><i class="ti-close"></i></a>
      <label>1 product added to cart</label>
    </div>
    <!-- /header_panel -->
    <div class="item">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="item_panel">
              <figure>
                <img src="img/products/product_placeholder_square_small.jpg" data-src="img/products/shoes/1.jpg" class="lazy" alt="">
              </figure>
              <h4>1x Armor Air X Fear</h4>
              <div class="price_panel"><span class="new_price">$148.00</span><span class="percentage">-20%</span> <span class="old_price">$160.00</span></div>
            </div>
          </div>
          <div class="col-md-5 btn_panel">
            <a href="cart.html" class="btn_1 outline">View cart</a> <a href="checkout.html" class="btn_1">Checkout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /item -->
    <div class="container related">
      <h4>Who bought this product also bought</h4>
      <div class="row">
        <div class="col-md-4">
          <div class="item_panel">
            <a href="#0">
              <figure>
                <img src="img/products/product_placeholder_square_small.jpg" data-src="img/products/shoes/2.jpg" alt="" class="lazy">
              </figure>
            </a>
            <a href="#0">
              <h5>Armor Okwahn II</h5>
            </a>
            <div class="price_panel"><span class="new_price">$90.00</span></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item_panel">
            <a href="#0">
              <figure>
                <img src="img/products/product_placeholder_square_small.jpg" data-src="img/products/shoes/3.jpg" alt="" class="lazy">
              </figure>
            </a>
            <a href="#0">
              <h5>Armor Air Wildwood ACG</h5>
            </a>
            <div class="price_panel"><span class="new_price">$75.00</span><span class="percentage">-20%</span> <span class="old_price">$155.00</span></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item_panel">
            <a href="#0">
              <figure>
                <img src="img/products/product_placeholder_square_small.jpg" data-src="img/products/shoes/4.jpg" alt="" class="lazy">
              </figure>
            </a>
            <a href="#0">
              <h5>Armor ACG React Terra</h5>
            </a>
            <div class="price_panel"><span class="new_price">$110.00</span></div>
          </div>
        </div>
      </div>
    </div>
    <!-- /related -->
  </div>

  <!-- Size modal -->
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="size-modal" id="size-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Size guide</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="ti-close"></i>
        </button>
        </div>
        <div class="modal-body">
          <p>Lorem ipsum dolor sit amet, et velit propriae invenire mea, ad nam alia intellegat. Aperiam mediocrem rationibus nec te. Tation persecuti accommodare pro te. Vis et augue legere, vel labitur habemus ocurreret ex.</p>
          <div class="table-responsive">
                <table class="table table-striped table-sm sizes">
                  <tbody><tr>
                    <th scope="row">US Sizes</th>
                    <td>6</td>
                    <td>6,5</td>
                    <td>7</td>
                    <td>7,5</td>
                    <td>8</td>
                    <td>8,5</td>
                    <td>9</td>
                    <td>9,5</td>
                    <td>10</td>
                    <td>10,5</td>
                  </tr>
                  <tr>
                    <th scope="row">Euro Sizes</th>
                    <td>39</td>
                    <td>39</td>
                    <td>40</td>
                    <td>40-41</td>
                    <td>41</td>
                    <td>41-42</td>
                    <td>42</td>
                    <td>42-43</td>
                    <td>43</td>
                    <td>43-44</td>
                  </tr>
                  <tr>
                    <th scope="row">UK Sizes</th>
                    <td>5,5</td>
                    <td>6</td>
                    <td>6,5</td>
                    <td>7</td>
                    <td>7,5</td>
                    <td>8</td>
                    <td>8,5</td>
                    <td>9</td>
                    <td>9,5</td>
                    <td>10</td>
                  </tr>
                  <tr>
                    <th scope="row">Inches</th>
                    <td>9.25"</td>
                    <td>9.5"</td>
                    <td>9.625"</td>
                    <td>9.75"</td>
                    <td>9.9375"</td>
                    <td>10.125"</td>
                    <td>10.25"</td>
                    <td>10.5"</td>
                    <td>10.625"</td>
                    <td>10.75"</td>
                  </tr>
                  <tr>
                    <th scope="row">CM</th>
                    <td>23,5</td>
                    <td>24,1</td>
                    <td>24,4</td>
                    <td>24,8</td>
                    <td>25,4</td>
                    <td>25,7</td>
                    <td>26</td>
                    <td>26,7</td>
                    <td>27</td>
                    <td>27,3</td>
                  </tr>
                </tbody></table>
              </div>
          <!-- /table -->
        </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts')

  <!-- SPECIFIC SCRIPTS -->
  <script  src="/new/js/carousel_with_thumbs.js"></script>

@endsection
