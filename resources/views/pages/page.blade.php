@extends('layout-shop')

@section('title_description', $page->title_description)

@section('meta_description', $page->meta_description)

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
                <li class="sub tail current">{{ $page->title }}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section pt-6 pb-6">
    <div class="container">
      <div class="row">
        <div class="offset-md-2 col-md-8">
          <h3 class="text-center mb-4">{{ $page->title }}</h3>
          {!! $page->content !!}
        </div>
      </div>
    </div>
  </section>
@endsection


@section('scripts')

@endsection