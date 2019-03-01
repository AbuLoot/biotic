@extends('layout-shop')

@section('title_description', 'Biotic - Продукты долголетия')

@section('meta_description', 'Торговая компания “Biotic” специализируется на продаже высококачественных, натуральных продуктов для здоровья и красоты. Оптово-розничные продажи БАДов, витаминов, трав, спортивного питания, натуральной пищи, ароматов, средств для гигиены и ухода.')

@section('head')

@endsection


@section('content')

  @include('partials.breadcrumb')

  <section class="section pt-6 pb-6">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 order-xs-2">
          <h3>Зарегистрироваться</h3>
          <form class="commerce-form-login">
            <div class="form-item">
              <label for="username">Username <span class="required">*</span></label>
              <input type="text" class="form-text" name="username" id="username" value="" />
            </div>
            <div class="form-item">
              <label for="email">Email address <span class="required">*</span></label>
              <input type="email" class="form-text" name="email" id="email" value="" />
            </div>
            <div class="form-item">
              <label for="password">Password <span class="required">*</span></label>
              <input class="form-text" type="password" name="password" id="password" />
            </div>
            <div class="form-item">
              <label for="password">Re-Password <span class="required">*</span></label>
              <input class="form-text" type="password" name="password" id="password" />
            </div>
            <div class="form-item">
              <button type="submit" class="button button-primary" name="login" value="Login">Зарегистрироваться</button>
            </div>
          </form>
        </div>
        <div class="col-sm-6 mb-4 order-xs-1">
          <h3>Войти в аккаунт</h3>
          <form class="commerce-form-login">
            <div class="form-item">
              <label for="username">Username or email address <span class="required">*</span></label>
              <input type="text" class="form-text" name="username" id="username" value="" />
            </div>
            <div class="form-item">
              <label for="password">Password <span class="required">*</span></label>
              <input class="form-text" type="password" name="password" id="password" />
            </div>
            <div class="form-item">
              <button type="submit" class="button button-primary" name="login" value="Login">Войти</button>
              <input class="form-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Запомнить меня</span>
            </div>
            <div class="form-item">
              <a href="#">Забыли пароль?</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection


@section('scripts')

@endsection