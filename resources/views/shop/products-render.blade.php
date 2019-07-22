
  <?php $items = session('items'); ?>

  @foreach ($products as $product)
    <div class="col-6 col-sm-6 col-lg-4">
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
            @if (is_array($items) AND in_array($product->id, $items['products_id']))
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