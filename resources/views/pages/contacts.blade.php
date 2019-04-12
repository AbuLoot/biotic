@extends('layout-shop')

@section('title_description', 'Biotic - Продукты долголетия')

@section('meta_description', 'Торговая компания “Biotic” специализируется на продаже высококачественных, натуральных продуктов для здоровья и красоты. Оптово-розничные продажи БАДов, витаминов, трав, спортивного питания, натуральной пищи, ароматов, средств для гигиены и ухода.')

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
      <h3 class="text-center mb-4">Наши контакты</h3>
      <div class="row">
        <div class="col-sm-6">
          <h4> Адрес</h4>
          <p class="fz-22"> 2005 Stokes Isle Apt. 896,<br />Venaville 10010, USA</p>
          <h4 class="mt-3"> Emails</h4>
          <p class="heading fz-22 fw-normal"> <a class="secondary-color" href="mailto:info@moody.com">info@moody.com</a></p>
          <h4 class="mt-3"> Номера телефонов</h4>
          <p class="fz-22"> (+68) 120034509</p>
        </div>
        <div class="col-sm-6">
          <div class="contact-form-wrapper">
            <form class="contact-form">
              <div class="form-control-wrap">
                <input type="text" name="name" value="" size="40" class="form-text" placeholder="Name *">
              </div>
              <div class="form-control-wrap">
                <input type="email" name="email" value="" size="40" class="form-text" placeholder="Email *">
              </div>
              <div class="form-control-wrap">
                <input type="text" name="subject" value="" size="40" class="form-text" placeholder="Subject *">
              </div>
              <div class="form-control-wrap">
                <textarea name="message" cols="40" rows="4" class="form-textarea" placeholder="Message"></textarea>
              </div>
              <div class="text-center">
                <input type="submit" value="Submit Now" class="submit button style-flat button-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection


@section('scripts')

@endsection