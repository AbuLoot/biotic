@extends('layout-promo')

@section('title_description', 'Biotic - Натуральные продукты')

@section('meta_description', 'Торговая компания “Biotic” специализируется на продаже высококачественных, натуральных продуктов для здоровья и красоты. Оптово-розничные продажи БАДов, витаминов, трав, спортивного питания, натуральной пищи, ароматов, средств для гигиены и ухода.')

@section('head')
  <link href="https://fonts.googleapis.com/css?family=Philosopher&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="/css/main.css" type="text/css" media="all"/>
@endsection


@section('content')
  <section class="container-fluid">
    <div class="row">
      <!-- <a href="/epimediumnaya-pasta"> -->
        <div class="col-md-6 presentation-epimedium pt-7">
          <h2 class="h1 ts-1 font-philosopher">Польза Эпимедиумной Пасты Sidra</h2>
          <h4 class="white ts-1 -fz-20 ">Прилив мужской силы и здоровья до 2-х дней.<br> Лечит простатит и повышает Иммунитет.</h4>
          <!-- <p class="ts-1">Уникальный рецепт половой силы и здоровья для мужчин и женщин из Турции</p> -->
          <a class="button style-flat button-xs button-secondary fz-20" href="/epimediumnaya-pasta">Подробнее</a>
          <!-- <img src="/img/epimedium.jpg" class="img-responsive pull-right"> -->
        </div>
      <!-- </a> -->
      <!-- <a href="/epimediumnaya-pasta"> -->
        <div class="col-md-6 presentation-collagen pt-7">
          <h2 class="h1">100% ГОВЯЖИЙ ПРОТЕИН</h2>
          <h4 class="white ls-1">Протеин полученный из натурального говяжьего белка, для набора мышечной массы и укрепления суставов и связок</h4>
          <a class="button style-outline button-xs button-primary fz-20" href="/protein">Подробнее</a>
          <!-- <img src="/img/collagen.jpg" class="img-responsive"> -->
        </div>
      <!-- </a> -->
    </div>
  </section>
@endsection


@section('scripts')

@endsection
