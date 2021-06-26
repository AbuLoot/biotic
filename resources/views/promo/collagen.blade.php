@extends('layout-promo')

@section('title_description', $project->title_description)

@section('meta_description', $project->meta_description)

@section('head')
  <link rel="stylesheet" href="/css/promo/collagen.css" type="text/css" media="all"/>

  <link rel="stylesheet" href="/bower_components/photoswipe/dist/photoswipe.css">
  <link rel="stylesheet" href="/bower_components/photoswipe/dist/default-skin/default-skin.css">
@endsection

@section('content')
  <header class="bg-header pt-3">
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="branding__logo">
              <a  class="navbar-brand- biotic-logo-" href="/protein">
                <img src="/img/logo-brand-130x55.png" alt="Biotic">
              </a>
              <!-- <h3 class="heading small fz-24 white ts-1 mt-2"> 100% натуральный продукт</h3> -->
            </div>
          </div>
          <div class="offset-sm-5 col-sm-4">
            <div class="phones d-none d-sm-block">
              <a onclick="fbq('track', 'Contact');" href="tel:+77087181502" target="_top" data-attr="phone"><i class="fa fa-phone"></i> 8 (708) 718 1502</a>
              <a onclick="fbq('track', 'Contact');" href="whatsapp://send?phone=+77087181502" target="_top" data-attr="whatsapp_call"><i class="fa fa-whatsapp"></i> 8 (708) 718 1502</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 header-main-content">
            <!-- <h1 class="heading text-center- text-uppercase header-title ts-1"><span class="color-green">BEEF PROTEIN</span> набери до&nbsp;7&nbsp;кг мышечной массы за&nbsp;1&nbsp;месяц</h1> -->
            <h1 class="heading header-title primary-color- ts-1"><span>BULL PROTEIN</span></h1>
            <!-- <h3 class="heading white ts-1">Коллаген силы и молодости!</h3> -->
            <ul class="description-list ts-1">
              <!-- <li><p> Построй свое тело и&nbsp;укрепи суставы и&nbsp;связки</p></li> -->
              <li><i class="fa fa-circle"></i> Наращивание мыщечной массы</li>
              <li><i class="fa fa-circle"></i> Укрепляет суставы и связки</li>
              <li><i class="fa fa-circle"></i> Увеличивает силовые показатели</li>
            </ul>
            <!-- <h1 class="heading text-center- text-uppercase header-title ts-1"><span class="color-green">BULL PROTEIN</span><br> набери мышечную массу от 2 до 6кг и&nbsp;укрепи суставы и&nbsp;связки</h1> -->
            <!-- <p class="primary-color- white fz-20 lh-24 ts-1">Протеин полученный из натурального говяжьего белка, для набора мышечной массы и для укрепления суставов и связок.</p> -->

            <div class="col-sm-6 recommendation ts-1">
              <p>"Чемпионы MMA по версии M1-Global Асу&nbsp;Алмабаев и Арман&nbsp;Ашимов зарекомендовали наш протеин!"</p>
            </div>
          </div>
          <div class="col-sm-4 header-main-bg">
            <img src="/img/promo/collagen/Web 1kg BANK BULL PROTEIN 2.png">
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- STANDARTS -->
  <section class="section bg-black pt-5 pb-2">
    <div class="container-fluid">
      <div class="row no-gutters">
        <div class="col-4 col-sm-4 col-md-2 mb-2">
          <img src="/img/standarts/eac2.png" class="img-responsive">
        </div>
        <div class="col-4 col-sm-4 col-md-2 mb-2">
          <img src="/img/standarts/eco3.png" class="img-responsive">
        </div>
        <div class="col-4 col-sm-4 col-md-2 mb-2">
          <img src="/img/standarts/haccp2.png" class="img-responsive">
        </div>
        <div class="col-4 col-sm-4 col-md-2 mb-2">
          <img src="/img/standarts/iso-9001.png" class="img-responsive">
        </div>
        <div class="col-4 col-sm-4 col-md-2 mb-2">
          <img src="/img/standarts/kap2.png" class="img-responsive">
        </div>
        <div class="col-4 col-sm-4 col-md-2 mb-2">
          <img src="/img/standarts/madeinkz2.png" class="img-responsive">
        </div>
      </div>
    </div>
  </section>

  <!-- WHO NEEDS COLLAGEN -->
  <section class="section why-beefprotein">
    <div class="cover-dark">
      <div class="container">
        <div class="row align-items-center pb-8">
          <div class="col-sm-12 col-lg-6">
            <img class="d-block- mt-5- mx-auto-" src="/img/promo/collagen/bg/left-bg-sportsmen.jpg" alt="">
            <!-- <div class="text-center">
              <a href="#" class="btn-app btn-app-p mt-2" data-toggle="modal" data-target="#appModal">Консультация</a>
            </div> -->
          </div>
          <div class="col-sm-12 col-lg-6 pt-4">
            <h2 class="heading fz-50- text-white"> Нужен ли <span class="primary-color">protein</span>?</h2>
            <!-- <p>Повышенная физическая нагрузка у спортсменов и как следствие недостаток аминокислот в организме приводит:</p> -->
            <p>Во время физических и спортивных нагрузках происходит истощение организма и износ хрящевой ткани. Обычное питание во многом не восполняет суточную норму калории. Если не дать нашему организму необходимое количество белка то это приведет к следующим последствиям:</p>
            <ul class="list-who-needs-">
              <li><i class="fa fa-minus"></i> к мышечному стрессу,</li>
              <li><i class="fa fa-minus"></i> к болям локтей и колен,</li>
              <li><i class="fa fa-minus"></i> подверженность организма к травмам,</li>
              <li><i class="fa fa-minus"></i> нервным расстройствам,
              <li><i class="fa fa-minus"></i> к снижению иммунитета.</li>
            </ul>
            <p>Именно поэтому многие принимают коллагеновый протеин, который восстанавливает и наращивает мышцы белком и укрепляет суставы и связки.</p>
            <!-- <p>Также недостаток аминокислот и кальция в организме приводит к ослаблению костей и плохому состоянию кожи, волос и ногтей. Что делает организм более подверженным к травмам и ущербам.</p> -->
            <!-- <p>Поэтому рекомендуется в период интенсивных тренировок принимать  коллагеновый протеин, который является строителем кожи, связок и соединительных тканей организма.</p> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY YOU DO YOU NEED COLLAGEN? -->
  <!-- <section class="section pt-6 pb-4 bg-black">
    <div class="container">
      <h2 class="heading white mb-5 text-center">Кому надо принимать добавку?</h2>
      <div class="row">
        <div class="col-sm-6 col-lg-4">
          <div class="who-need">
            <div class="grid-overlay" style="background-image: url(/img/promo/collagen/bg/nathan-dumlao-f337NcMIPGA-unsplash.jpg)"></div>
            <h5 class="white ls-1">Спортсменам и людям занимающимся тяжелым физическим трудом.</h5>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="who-need">
            <div class="grid-overlay" style="background-image: url(/img/promo/collagen/bg/anastase-maragos-CeKkzOuhtVM-unsplash.jpg)"></div>
            <h5 class="white ls-1">Для тех кто хочет избавиться от дряблости кожи и сохранить молодость.</h5>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="who-need">
            <div class="grid-overlay" style="background-image: url(/img/promo/collagen/bg/karsten-winegeart-23v3CPzy82o-unsplash.jpg)"></div>
            <h5 class="white ls-1">Людям получившим травму или перенесшие операцию в период реабилитации.</h5>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- OUR PRODUCTS -->
  <section class="section pt-8 pb-8">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <!-- <h4 class="text-center text-uppercase"> Они говорят что мы лучшие</h4> -->
          <h2 class="heading text-center text-uppercase mb-5"> <span class="primary-color">BULL </span> PROTEINS</h2>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="offset-sm-2 col-sm-6 col-md-4">
          <div class="product-item">
            <div class="product-thumbnail">
              <a href="#">
                <img class="img-responsive" src="/img/promo/collagen/Web 1kg BANK BULL PROTEIN 2.png" alt="BULL PROTEIN 1kg bank" />
              </a>
              <!-- <div class="actions"> <div class="action action-view-detail"> </div> <div class="action action-add-to-cart"> <a href="#" class="button-add-to-cart" data-toggle="modal" data-target="#appModal">Заказать</a> </div> </div> -->
              <div class="text-center">
                <button type="button" class="btn-app mt-2" data-toggle="modal" data-target="#appModal">Заказать</button>
              </div>
            </div>
            <div class="product-info">
              <h2 class="product-title">Протеин в банке 1 кг.</h2>
              <span class="price">10900〒</span>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="product-item">
            <div class="product-thumbnail">
              <a href="#">
                <img class="img-responsive" src="/img/promo/collagen/Web 1kg package BULL PROTEIN 2.png" alt="BULL PROTEIN 1kg package" />
              </a>
              <!-- <div class="actions"> <div class="action action-view-detail"> </div> <div class="action action-add-to-cart"> <a href="#" class="button-add-to-cart" data-toggle="modal" data-target="#appModal">Заказать</a> </div> </div> -->
              <div class="text-center">
                <button type="button" class="btn-app mt-2" data-toggle="modal" data-target="#appModal">Заказать</button>
              </div>
            </div>
            <div class="product-info">
              <h2 class="product-title">Протеин в пакете 1 кг.</h2>
              <span class="price">9900〒</span>
            </div>
          </div>
        </div>
        <!-- <div class="col-sm-6 col-md-4">
          <div class="product-item">
            <div class="product-thumbnail">
              <a href="#">
                <img class="img-responsive" src="/img/promo/collagen/banka-3kg.png" alt="BULL PROTEIN 3kg bank" />
              </a>
              <div class="actions"> <div class="action action-view-detail"> </div> <div class="action action-add-to-cart"> <a href="#" class="button-add-to-cart" data-toggle="modal" data-target="#appModal">Заказать</a> </div> </div>
              <div class="text-center">
                <button type="button" class="btn-app mt-2" data-toggle="modal" data-target="#appModal">Заказать</button>
              </div>
            </div>
            <div class="product-info">
              <h2 class="product-title">Протеин в банке 3 кг.</h2>
              <span class="price">26900〒</span>
            </div>
          </div>
        </div> -->

        <div class="offset-md-1 col-sm-10">
          <p class="text-center fz-20 lh-20 pt-2 ts-1-">Для оптовиков: <a class="primary-color" href="/docs/BULL PROTEIN HYDROLYZED COLLAGEN PRESENTATION FOR GYM`s.pdf" target="_blank">Презентация</a></p>
          <!-- <p class="primary-color- text-center- white fz-26 lh-30 ts-1">Это натуральный коллаген для построения качественной мускулатуры и для укрепления суставов и связок.</p> -->
        </div>

        <!-- <div class="col-sm-6 col-md-3">
          <div class="product-item">
            <div class="product-thumbnail">
              <a href="#">
                <img class="img-responsive" src="/img/promo/collagen/capsule.png" alt="" />
              </a>
              <div class="actions"> <div class="action action-view-detail"> </div> <div class="action action-add-to-cart"> <a href="#" class="button-add-to-cart" data-toggle="modal" data-target="#appModal">Заказать</a> </div> </div>
              <div class="text-center">
                <button type="button" class="btn-app mt-2" data-toggle="modal" data-target="#appModal">Заказать</button>
              </div>
            </div>
            <div class="product-info">
              <h2 class="product-title">Коллаген в капсулах</h2>
              <span class="price">6900〒</span>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <!-- WHO NEEDS COLLAGEN -->
  <section class="section bg-w bg-black">
    <div class="cover-left-">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="service-thumbnail">
              <img class="w-100" src="/img/promo/collagen/protein-effect.jpg" alt="BULL PROTEIN COLLAGENous">
            </div>
          </div>
          <div class="col-lg-6 offset-lg-1 col-md-6 col-12">
            <h3 class="heading text-white mt-3">Все мы хотим иметь красивое и&nbsp;<span class="primary-color">здоровое</span> тело.</h3>
            <p class="text-white">Для этого очень важно заниматься активным образом жизни и питаться правильно. С BULL PROTEIN вы добьетесь быстрых результатов. Протеин в основе которого лежит технология гидролиза, позволяет быть протеину максимально биодоступным и полезным.</p>
          </div>
        </div>
        <div class="row align-items-center pt-8">
          <div class="col-sm-12 col-lg-4 pb-4 order-xs-2">
            <h2 class="heading white">Хочешь набрать <span class="primary-color">мышечную</span> массу?</h2>
            <!-- <h4 class="white">Хочешь набрать мышечную массу?</h4> -->
            <ul class="list-who-needs">
              <li><span class="primary-color"><i class="fa fa-circle"></i></span> Употребляйте больше белков(мясные, молочные продукты, рыбы, яйца и другие).</li>
              <li><span class="primary-color"><i class="fa fa-circle"></i></span> Употребляйте больше углеводов(овсянка, гречка, рис, овощи, фрукты и другие).</li>
              <li><span class="primary-color"><i class="fa fa-circle"></i></span> Пейте <span class="color-green">BULL PROTEIN</span> и тренируйтесь!</li>
            </ul>
            <div class="text-center">
              <a href="#" class="btn-app btn-app-p mt-2" data-toggle="modal" data-target="#appModal">Консультация</a>
            </div>
          </div>
          <div class="col-sm-12 col-lg-8 pb-4 order-xs-1">
            <img class="d-block mx-auto" src="/img/promo/collagen/protein-for-mass.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHO NEEDS COLLAGEN 2 -->
  <section class="section bg-black">
    <div class="cover-dark-">
      <div class="container">
        <div class="row align-items-center pt-4">
          <div class="col-sm-12 col-lg-7 pb-4">
            <img class="d-block" src="/img/promo/collagen/protein-for-body-drying.jpg" alt="">
          </div>
          <div class="col-sm-12 col-lg-4 pb-4">
            <h3 class="heading white">Хочешь избавиться от лишнего жира и&nbsp;накачать <span class="primary-color">мускулатуру</span>?</h3>
            <!-- <h4 class="white">Хотите накачать рельефную мускулатуру и избавиться от лишнего веса?</h4> -->
            <ul class="list-who-needs">
              <li><span class="primary-color"><i class="fa fa-circle"></i></span> Употребляйте больше белков(мясные, молочные продукты, рыбы, яйца и другие).</li>
              <li><span class="primary-color"><i class="fa fa-circle"></i></span> Замените быстрые углеводы(мучные и сахарные продукты) на сложные углеводы(овсянка, гречка, овощи, ягоды, фрукты и другие). </li>
              <li><span class="primary-color"><i class="fa fa-circle"></i></span> Пейте <span class="color-green">BULL PROTEIN</span> и тренируйтесь!</li>
            </ul>
            <div class="text-center">
              <a href="#" class="btn-app btn-app-p mt-2" data-toggle="modal" data-target="#appModal">Консультация</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERTIFICATES -->
  <section class="section sertificates pt-8 pb-8">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <h2 class="heading text-center text-uppercase mb-5"> Сертификаты</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-9 mx-auto">
          <div class="row text-center">
            <div class="col-6 col-sm-4">
              <h5><b>ISO 22000/HACCP<br> Сертификат безопасности</b></h5>
              <a target="_blank" href="/img/promo/collagen/sertificates/iso-22000.jpg">
                <img class="img-responsive" src="/img/promo/collagen/sertificates/iso-22000-mini.jpg">
              </a><br>
            </div>
            <div class="col-6 col-sm-4">
              <h5><b>ISO 9001<br> Сертификат качества</b></h5>
              <a target="_blank" href="/img/promo/collagen/sertificates/iso-9001-ru.jpg">
                <img class="img-responsive" src="/img/promo/collagen/sertificates/iso-9001-ru-mini.jpg"><br>
              </a><br>
            </div>
            <div class="col-6 col-sm-4">
              <h5><b>Анализ<br> Сертификат качества</b></h5>
              <a target="_blank" href="/img/promo/collagen/sertificates/сертификат качества 1.jpg">
                <img class="img-responsive" src="/img/promo/collagen/sertificates/сертификат качества 1-mini.jpg"><br><br>
              </a><br>
            </div>
            <div class="col-6 col-sm-4">
              <h5><b>Казахская Академия Питания<br> Рекомендация стр.1</b></h5>
              <a target="_blank" href="/img/promo/collagen/sertificates/kazakh-akadimiia-pitaniia 1.jpeg">
                <img class="img-responsive" src="/img/promo/collagen/sertificates/kazakh-akadimiia-pitaniia 1-mini.jpeg">
              </a><br>
            </div>
            <div class="col-6 col-sm-4">
              <h5><b>Казахская Академия Питания<br> Подтверждение стр.2</b></h5>
              <a target="_blank" href="/img/promo/collagen/sertificates/kazakh-akadimiia-pitaniia 2.jpeg">
                <img class="img-responsive" src="/img/promo/collagen/sertificates/kazakh-akadimiia-pitaniia 2-mini.jpeg">
              </a><br>
            </div>
            <div class="col-6 col-sm-4">
              <h5><b>ЕАЭС<br> Соответствие требованиям</b></h5>
              <a target="_blank" href="/img/promo/collagen/sertificates/EAES 2019.jpg">
                <img class="img-responsive" src="/img/promo/collagen/sertificates/EAES 2019-mini.jpg"><br>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BENEFITS OF COLLAGEN -->
  <section class="section bg-benefits">
    <img class="d-block d-sm-none mx-auto" src="/img/promo/collagen/protein-advantages.jpg" alt="">

    <div class="container">
      <div class="row no-gutters pt-8 pb-8">
        <div class="col-sm-12 col-lg-6">
          <!-- <img class="d-block mt-5 mx-auto" src="/img/promo/collagen/banka-1-kg.png" alt="">
          <div class="text-center">
            <a href="#" class="btn-app btn-app-p mt-2" data-toggle="modal" data-target="#appModal">Консультация</a>
          </div> -->
        </div>
        <div class="col-sm-12 col-lg-6 about-beef-protein">
          <h2 class="heading white">В чем <span class="primary-color">превосходтво</span>?</h2>
          <p>BULL PROTEIN имеет международный сертификаты ISO, HACCP, всю необходимую документацию и лабораторные анализы.</p>
          <p>Преимущества нашей продукции:</p>
          <ul class="list-benefist">
            <li><span class="primary-color"><i class="fa fa-check"></i></span> Полный состав Аминокислот</li>
            <!-- <li><span class="primary-color"><i class="fa fa-check"></i></span> Гибкость суставов и позвонков</li> -->
            <li><span class="primary-color"><i class="fa fa-check"></i></span> Высокая скорость усвоения</li>
            <!-- <li><span class="primary-color"><i class="fa fa-check"></i></span> Усвояемость продукта на 98%</li> -->
            <li><span class="primary-color"><i class="fa fa-check"></i></span> Повышает Иммунитет</li>
            <li><span class="primary-color"><i class="fa fa-check"></i></span> Рекомендует Казахская Академия Питания</li>
            <li><span class="primary-color"><i class="fa fa-check"></i></span> Минеральные вещества (кальций и магний),</li>
            <li><span class="primary-color"><i class="fa fa-check"></i></span> Жирорастворимые витамины А, Е, С, Д3 и В12.</li>
          </ul>
          <p>Ввиду очевидных преимуществ и при полном отсутствии негативных эффектов, данный вид спортивного питания идеален для построения качественной мускулатуры.</p>
          <!-- <p>Он является действительно качественным и эффективным «бонусом» для организма в плане белкового насыщения, которое в большинстве случаев невозможно естественным образом.</p> -->
        </div>
      </div>
    </div>
  </section>

  <!-- STANDARTS -->
  <section class="section bg-standarts pt-5 pb-3">
    <div class="container-fluid">
      <div class="row no-gutters">
        <div class="col-4 col-sm-4 col-md-2 mb-2">
          <img src="/img/standarts/eac2.png" class="img-responsive">
        </div>
        <div class="col-4 col-sm-4 col-md-2 mb-2">
          <img src="/img/standarts/eco2.png" class="img-responsive">
        </div>
        <div class="col-4 col-sm-4 col-md-2 mb-2">
          <img src="/img/standarts/haccp2.png" class="img-responsive">
        </div>
        <div class="col-4 col-sm-4 col-md-2 mb-2">
          <img src="/img/standarts/iso-9001.png" class="img-responsive">
        </div>
        <div class="col-4 col-sm-4 col-md-2 mb-2">
          <img src="/img/standarts/kap2.png" class="img-responsive">
        </div>
        <div class="col-4 col-sm-4 col-md-2 mb-2">
          <img src="/img/standarts/madeinkz2.png" class="img-responsive">
        </div>
        <!-- <div class="col-4 col-sm-4 col-md-2 mb-2">
          <img src="/img/standarts/halal2.png" class="img-responsive">
        </div> -->
      </div>
    </div>
  </section>

  <!-- REVIEWS -->
  <section class="section bg-black reviews-">
    <div class="reviews-overlay pt-3 pb-8">
      <div class="container-fluid">
        <h2 class="heading text-center mb-5 primary-color">Отзывы</h2>
        <!-- <div class="row">
          <div class="col-md-3 col-sm-6 col-6">
            <div class="embed-responsive embed-responsive-4by3">
            <video width="320" height="240" controls>
              <source src="/reviews/collagen/asu.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-6">
            <div class="embed-responsive embed-responsive-4by3">
            <video width="320" height="240" controls>
              <source src="/reviews/collagen/video2.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-6">
            <div class="embed-responsive embed-responsive-4by3">
            <video width="320" height="240" controls>
              <source src="/reviews/collagen/arman.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-6">
            <div class="embed-responsive embed-responsive-4by3">
              <video width="320" height="240" controls>
                <source src="/reviews/collagen/Promo asu.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>
        <br> -->
        <div class="row my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
          <figure class="col-md-2 col-sm-3 col-4" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/reviews/collagen/r2.jpg" itemprop="contentUrl" data-size="600x1067">
              <img src="/reviews/collagen/r2.jpg" itemprop="thumbnail">
            </a>
          </figure>
          <figure class="col-md-2 col-sm-3 col-4" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/reviews/collagen/r3.jpg" itemprop="contentUrl" data-size="600x1067">
              <img src="/reviews/collagen/r3.jpg" itemprop="thumbnail">
            </a>
          </figure>
          <figure class="col-md-2 col-sm-3 col-4" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/reviews/collagen/r4.jpg" itemprop="contentUrl" data-size="600x1067">
              <img src="/reviews/collagen/r4.jpg" itemprop="thumbnail">
            </a>
          </figure>
          <figure class="col-md-2 col-sm-3 col-4" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/reviews/collagen/r5.jpg" itemprop="contentUrl" data-size="600x1067">
              <img src="/reviews/collagen/r5.jpg" itemprop="thumbnail">
            </a>
          </figure>
          <figure class="col-md-2 col-sm-3 col-4" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/reviews/collagen/r6.png" itemprop="contentUrl" data-size="600x1067">
              <img src="/reviews/collagen/r6.png" itemprop="thumbnail">
            </a>
          </figure>
          <figure class="col-md-2 col-sm-3 col-4" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/reviews/collagen/r7.jpg" itemprop="contentUrl" data-size="600x1067">
              <img src="/reviews/collagen/r7.jpg" itemprop="thumbnail">
            </a>
          </figure>
          <figure class="offset-md-2 col-md-2 col-sm-3 col-4" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/reviews/collagen/r8.png" itemprop="contentUrl" data-size="600x1067">
              <img src="/reviews/collagen/r8.png" itemprop="thumbnail">
            </a>
          </figure>
          <figure class="col-md-2 col-sm-3 col-4" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/reviews/collagen/r11.jpg" itemprop="contentUrl" data-size="600x1067">
              <img src="/reviews/collagen/r11.jpg" itemprop="thumbnail">
            </a>
          </figure>
          <figure class="col-md-2 col-sm-3 col-4" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/reviews/collagen/r10.png" itemprop="contentUrl" data-size="600x1067">
              <img src="/reviews/collagen/r10.png" itemprop="thumbnail">
            </a>
          </figure>
          <figure class="col-md-2 col-sm-3 col-4" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/reviews/collagen/r9.jpg" itemprop="contentUrl" data-size="600x820">
              <img src="/reviews/collagen/r9.jpg" itemprop="thumbnail">
            </a>
          </figure>
        </div>
      </div>
    </div>
  </section>

  <!-- Root element of PhotoSwipe. Must have class pswp. -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>
      <div class="pswp__ui pswp__ui--hidden">
        <div class="pswp__top-bar">
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

  <!-- FAQ -->
  <section class="section pt-10 pb-6">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h3 class="text-uppercase heading fw-normal fz-32 mb-2"> Часто задаваемые вопросы</h3>
          <div id="accordion" class="accordion">
            <div class="accordion-section">
              <div class="accordion-header" id="headingOne">
                <h6 class="accordion-title">
                  <div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Сколько раз в день надо принимать?</div>
                  <span class="accordion-icon"></span>
                </h6>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="accordion-content">
                  Давайте рассмотрим два варианта:<br>
                  1) нужно набрать мышечную массу.<br>
                  В сутки необходимо употреблять 2 г белка на каждый килограмм веса. Если вы весите 60 кг нужно 120 г белка за день. Необходимо будет примерно посчитать сколько белка вы употребляете за день с едой.
                  <br>Яйца *3шт  = 18гр<br>
                  Рис 300гр  = 21гр<br>
                  Говядина 100гр = 19гр<br>
                  Творог 100гр = 15гр<br>
                  Итак вы выяснили за день вы употребляйте 73 г белка. Остальные 50 г нужно будет восполнить протеином это два раза по 25 гр в день.
                  <br>2) для сжигания жира, повышение иммунитета, укрепление суставов или просто для соблюдения суточной нормы белка из-за недостаточности белка в дневном рационе и прочие цели.
                  в данном случае вам нужно будет употреблять 1 г белка на каждый килограмм веса ежедневно. Нужно посчитать аналогично первому варианту и определить для себя приемы протеина.

                </div>
              </div>
            </div>
            <div class="accordion-section">
              <div class="accordion-header" id="headingZero">
                <h6 class="accordion-title">
                  <div data-toggle="collapse" data-target="#collapseZero" aria-expanded="false" aria-controls="collapseZero">На сколько хватает 1 кг?</div>
                  <span class="accordion-icon"></span>
                </h6>
              </div>
              <div id="collapseZero" class="collapse" aria-labelledby="headingZero" data-parent="#accordion">
                <div class="accordion-content">В одном килограмме протеина на 40 порций по 25 гр. Если вы будете принимать по 2 раза в день вам хватит на 20 дней. Соответственно в 3 кг 120 порции.</div>
              </div>
            </div>
            <div class="accordion-section">
              <div class="accordion-header" id="headingSix">
                <h6 class="accordion-title">
                  <div class="collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Чем отличается ваш протеин от других?</div>
                  <span class="accordion-icon"></span>
                </h6>
              </div>
              <div id="collapseSix" class="collapse show-" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="accordion-content">На рынке есть очень большое количество производители спортивного питания. Все они зарубежные компании. Во многом чтобы удешевить стоимость протеина используются разные бюджетные методы, протеин делается из сыворотки или яичного белка. Тут нужно просто задуматься, чтобы нарастить мясо, то есть мышцы эффективнее есть мясо или яйцо? В силу того что в нашей стране пока мясо стоит не так дорого мы предоставляем качественный продукт за доступную цену. Мы используем современное немецкое оборудование.</div>
              </div>
            </div>
            <div class="accordion-section">
              <div class="accordion-header" id="headingTwo">
                <h6 class="accordion-title">
                  <div class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">За сколько времени можно получить результат?</div>
                  <span class="accordion-icon"></span>
                </h6>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="accordion-content">Результат заметен примерно через 10 дней. Но многое зависит от комплекса мер которые вы предпринимаете. Если цель набор массы например тогда зависит от того как вы питаетесь, тренируетесь и спите.</div>
              </div>
            </div>
            <div class="accordion-section">
              <div class="accordion-header" id="headingThree">
                <h6 class="accordion-title">
                  <div class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Можно ли пить протеин без тренировок. </div>
                  <span class="accordion-icon"></span>
                </h6>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="accordion-content">Да можно и нужно. Для правильного функционирования организма человек должен употреблять с едой 1 г белка на каждый килограмм веса, в независимости тренируется он или нет. В связи с разными проблемами здоровья врачи часто назначают белок. Протеин пьют разных целях.</div>
              </div>
            </div>
            <div class="accordion-section">
              <div class="accordion-header" id="headingFour">
                <h6 class="accordion-title">
                  <div class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Можно ли набрать массу без тренировок употребляя протеин.</div>
                  <span class="accordion-icon"></span>
                </h6>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="accordion-content">Да массу можно набрать, но максимальная эффективность достигается при принятии всех мер, хорошо питаться, принимать протеин, тренироваться и вовремя спать.</div>
              </div>
            </div>
            <div class="accordion-section">
              <div class="accordion-header" id="headingFive">
                <h6 class="accordion-title">
                  <div class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Вреден ли протеин для здоровья?</div>
                  <span class="accordion-icon"></span>
                </h6>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="accordion-content">Уместно сказать что наш протеин вреден ровно настолько, насколько и мясо. Некоторые люди ошибочно полагает, что протеин это что-то химическое. Протеин в переводе с английского означает белок. То есть это тот самый необходимый строительный материал нашего организма. Порой по различным причинам бывает сложно получать нужное количество белка от еды. Но как правило эту недостачу замечают люди у которых организм дает сбой или люди которые используют свое тело в полной мере - спортсмены. Многие производители для увеличения эффекта от некачественного продукта, добавляют разные добавки которые вредят репродуктивной системе или в целом здоровью.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="pt-7 pr-5 pl-5 pb-9 bg-white box-contact-shadow">
            <div class="text-center">
              <i class="fa fa-envelope-o primary-color fz-30"></i>
              <div class="mb-1"></div>
              <h3 class="heading fw-normal fz-32"> Форма для заявки</h3>
              <div class="mb-5"></div>
              <div class="contact-form-wrapper">
                <form method="post" action="/send-app">
                  {{ csrf_field() }}
                  <input type="hidden" name="project" value="collagen">
                  <div class="row">
                    <div class="col-md-12"> 
                      <input type="text" name="name" placeholder="Введите имя*" minlength="2" maxlength="40" value="" required>
                    </div>
                    <div class="col-md-12">
                      <input type="tel" name="phone" placeholder="Введите номер телефона*" minlength="5" maxlength="20" value="" required>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" onclick="fbq('track', 'Lead');" class="btn-app mt-3">Отправить</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- APP MODAL -->
  <div class="modal fade" id="appModal" tabindex="-1" role="dialog" aria-labelledby="appModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <!-- <div class="modal-header">
          <h5 class="modal-title" id="appModalLabel"><i class="fa fa-envelope-o primary-color fz-30"></i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> -->
        <div class="modal-body row p-5">
          <div class="col-lg-12">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="heading fw-normal fz-32 mb-1">Заполните форму</h3>
            <p class="fz-20 mb-1">и наш менеджер свяжется с Вами в ближайшее время</p>
            <div class="contact-form-wrapper">
              <form method="post" action="/send-app">
                {{ csrf_field() }}
                <input type="hidden" name="project" value="collagen">
                <div class="row">
                  <div class="col-md-12"> 
                    <input type="text" name="name" placeholder="Введите имя*" minlength="2" maxlength="40" value="" required>
                  </div>
                  <div class="col-md-12">
                    <input type="tel" name="phone" placeholder="Введите номер телефона*" minlength="5" maxlength="20" value="" required>
                  </div>
                  <div class="col-md-12 text-center">
                    <button type="submit" onclick="fbq('track', 'Lead');" class="btn-app mt-3">Отправить</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- <div class="col-lg-6">
            <br>
            <img src="/img/promo/collagen/banka-1kg.png" class="d-block mx-auto">
          </div> -->
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL MESSAGE -->
  <div class="modal fade" id="message-status" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center text-uppercase">Статус заявки</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <p class="alert {{ session('status') }}">{{ session('message') }}</p>
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

  <!-- Message Status -->
  @if (session('status'))
    <script type="text/javascript">
      $('#message-status').modal('show');
    </script>
  @endif
@endsection
