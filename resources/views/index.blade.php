@extends('layout')

@section('title_description', '')

@section('meta_description', '')

@section('head')
  <link rel="stylesheet" href="/css/style.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="/css/main.css" type="text/css" media="all"/>
@endsection


@section('content')
  <section class="container-fluid mt-5">
    <div class="row">
      <div class="col-md-6 presentation-epimedium pt-7">
        <h2 class="ts-1">ЭПИМЕДИУМНАЯ ПАСТА</h2>
        <p class="ts-1">Уникальный рецепт половой силы и здоровья для мужчин и женщин из Турции</p>
        <a class="button style-outline button-xs button-secondary fz-20" href="/epimediumnaya-pasta">Подробнее</a>
        <!-- <img src="/img/epimedium.jpg" class="img-responsive pull-right"> -->
      </div>
      <div class="col-md-6 presentation-collagen pt-7">
        <h2>100% ГОВЯЖИЙ ПРОТЕИН</h2>
        <p>Протеин полученный из натурального говяжьего белка, для набора мышечной массы, для укрепления суставов и связок</p>
        <a class="button style-outline button-xs button-primary fz-20" href="/protein">Подробнее</a>
        <!-- <img src="/img/collagen.jpg" class="img-responsive"> -->
      </div>
    </div>
  </section>
@endsection


@section('scripts')

@endsection
