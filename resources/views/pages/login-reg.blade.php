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
                <li class="sub tail current">Регистрация и Аутентификация</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section pt-6 pb-6">
    <div class="container">
      @include('partials.alerts')
      <div class="row">
        <div class="col-sm-6 order-xs-2">
          <h4>Зарегистрироваться</h4>
          <form class="commerce-form-login" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-item">
              <label for="name">Введите имя <span class="required">*</span></label>
              <input type="text" class="form-text" name="name" id="name" placeholder="Введите имя" minlength="2" maxlength="40" value="{{ old('name') }}" required>
            </div>
            <div class="form-item">
              <label for="email">Введите email <span class="required">*</span></label>
              <input type="email" class="form-text" name="email" id="email"placeholder="Введите Email" minlength="5" maxlength="80" value="{{ old('email') }}" required>
            </div>
            <div class="form-item">
              <label for="password">Пароль <span class="required">*</span></label>
              <input class="form-text" type="password" name="password" id="password" minlength="6" maxlength="40" required>
            </div>
            <div class="form-item">
              <label for="password-confirm">Повторите пароль <span class="required">*</span></label>
              <input class="form-text" type="password" name="password_confirmation" id="password-confirm" minlength="6" maxlength="40" required>
            </div>
            <div class="form-item">
              <button type="submit" class="button button-primary" name="login" value="Login">Зарегистрироваться</button>
            </div>
          </form>
        </div>
        <div class="col-sm-6 mb-4 order-xs-1">
          <h4>Войти в аккаунт</h4>
          <form class="commerce-form-login" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-item">
              <label for="email">Введите email или номер телефона <span class="required">*</span></label>
              <input type="text" class="form-text" name="email" id="email" placeholder="Введите email или номер телефона" minlength="2" maxlength="40" value="{{ old('email') }}" required>
            </div>
            <div class="form-item">
              <label for="password">Пароль <span class="required">*</span></label>
              <input class="form-text" type="password" name="password" id="password" minlength="6" maxlength="40" required>
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
  <script>
    window.onload = function () {
      document.getElementById("password").onchange = validatePassword;
      document.getElementById("password-confirm").onchange = validatePassword;
    }
    function validatePassword() {
      var pass1 = document.getElementById("password").value;
      var pass2 = document.getElementById("password-confirm").value;
      if (pass1 != pass2) {
        document.getElementById("password-confirm").setCustomValidity("Пароли не совпадают");
      } else {
        document.getElementById("password-confirm").setCustomValidity('');
        //empty string means no validation error
      }
    }
  </script>
@endsection