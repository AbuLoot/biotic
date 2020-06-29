@extends('layout-promo')

@section('title_description', $project->title_description)

@section('meta_description', $project->meta_description)

@section('head')
  <link rel="stylesheet" href="/css/promo/collagen.css" type="text/css" media="all"/>
@endsection

@section('content')
  <header class="bg-header pt-3">
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <div class="branding__logo">
              <a  class="navbar-brand- biotic-logo-" href="/protein">
                <img src="/img/logo-brand-130x55.png" alt="Biotic">
              </a>
              <!-- <h3 class="heading small fz-24 white ts-1 mt-2"> 100% натуральный продукт</h3> -->
            </div>
          </div>
          <div class="col-sm-4">
            <div class="phones d-none d-sm-block">
              <a onclick="fbq('track', 'Contact');" href="tel:+77087181502" target="_top" data-attr="phone"><i class="fa fa-phone"></i> 8 (708) 718 1502</a>
              <a onclick="fbq('track', 'Contact');" href="whatsapp://send?phone=+77087181502" target="_top" data-attr="whatsapp_call"><i class="fa fa-whatsapp"></i> 8 (708) 718 1502</a>
            </div>
          </div>
        </div>
        <div class="row header-main-content">
          <div class="offset-md-2- col-sm-8">
            <!-- <h1 class="heading text-center- text-uppercase header-title ts-1"><span class="color-green">BEEF PROTEIN</span> набери до&nbsp;7&nbsp;кг мышечной массы за&nbsp;1&nbsp;месяц</h1> -->
            <h1 class="heading text-center- text-uppercase header-title ts-1"><span class="color-green">BEEF PROTEIN</span><br> набери мышечную массу и укрепи суставы и связки</h1>
            <!-- <p class="primary-color- white fz-20 lh-24 ts-1">Протеин полученный из натурального говяжьего белка, для набора мышечной массы и для укрепления суставов и связок.</p> -->
            <div class="offset-md-1- col-sm-10-">
              <!-- <p class="primary-color- text-center- white fz-26 lh-30 ts-1">Это натуральный коллаген для построения качественной мускулатуры и для укрепления суставов и связок.</p> -->
            </div>

            <!-- <h3 class="heading primary-color header-price fz-60 "> 9500〒</h3> -->
          </div>
          <div class="col-sm-4">
            <img src="/img/promo/collagen/banka-3kg.png" class="float-sm-right-">
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- STANDARTS -->
  <section class="section bg-black pt-5 pb-2">
    <div class="container-fluid">
      <div class="row">
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
          <img src="/img/standarts/kap2.png" class="img-responsive">
        </div>
        <div class="col-4 col-sm-4 col-md-2 mb-2">
          <img src="/img/standarts/gmo2.png" class="img-responsive">
        </div>
        <div class="col-4 col-sm-4 col-md-2 mb-2">
          <img src="/img/standarts/madeinkz2.png" class="img-responsive">
        </div>
      </div>
    </div>
  </section>

  <!-- OUR PRODUCTS -->
  <section class="section pt-8 pb-8">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <!-- <h4 class="text-center text-uppercase"> Они говорят что мы лучшие</h4> -->
          <h2 class="text-center text-uppercase mb-5"> Спорт питания</h2>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-sm-6 col-md-4">
          <div class="product-item">
            <div class="product-thumbnail">
              <a href="#">
                <img class="img-responsive" src="/img/promo/collagen/banka-3kg.png" alt="" />
              </a>
              <!-- <div class="actions"> <div class="action action-view-detail"> </div> <div class="action action-add-to-cart"> <a href="#" class="button-add-to-cart" data-toggle="modal" data-target="#appModal">Заказать</a> </div> </div> -->
              <div class="text-center">
                <button type="button" class="btn-app mt-2" data-toggle="modal" data-target="#appModal">Заказать</button>
              </div>
            </div>
            <div class="product-info">
              <h2 class="product-title">Протеин в банке 3 кг.</h2>
              <span class="price">26900〒</span>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="product-item">
            <div class="product-thumbnail">
              <a href="#">
                <img class="img-responsive" src="/img/promo/collagen/banka-1kg.png" alt="" />
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
                <img class="img-responsive" src="/img/promo/collagen/package-1kg.png" alt="" />
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
        <div class="row align-items-center pt-8">
          <div class="col-sm-12 col-lg-6 pb-4 order-xs-2">
            <h2 class="text-uppercase fz-50- white">Хотите набрать <span class="primary-color">мышечную массу</span>?</h2>
            <!-- <h4 class="white">Хотите набрать мышечную массу?</h4> -->
            <ul class="list-who-needs">
              <li><span class="primary-color"><i class="fa fa-check"></i></span> Употребляйте больше белков(мясные, молочные продукты, рыбы, яйца и другие).</li>
              <li><span class="primary-color"><i class="fa fa-check"></i></span> Употребляйте больше углеводов(овсянка, гречка, рис, овощи, фрукты и другие).</li>
              <li><span class="primary-color"><i class="fa fa-check"></i></span> Пейте <span class="color-green">Beef Protein</span> и Тренируйтесь!</li>
            </ul>
            <div class="text-center">
              <a href="#" class="btn-app btn-app-p mt-2" data-toggle="modal" data-target="#appModal">Заказать</a>
            </div>
          </div>
          <div class="col-sm-12 col-lg-6 pb-4 order-xs-1">
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
          <div class="col-sm-12 col-lg-6 pb-4">
            <img class="d-block mx-auto" src="/img/promo/collagen/protein-for-body-drying.jpg" alt="">
          </div>
          <div class="col-sm-12 col-lg-6 pb-4">
            <h3 class="text-uppercase fz-50- white">Хотите избавиться от лишнего веса и накачать <span class="primary-color">красивую мускулатуру</span>?</h3>
            <!-- <h4 class="white">Хотите накачать рельефную мускулатуру и избавиться от лишнего веса?</h4> -->
            <ul class="list-who-needs">
              <li><span class="primary-color"><i class="fa fa-check"></i></span> Употребляйте больше белков(мясные, молочные продукты, рыбы, яйца и другие).</li>
              <li><span class="primary-color"><i class="fa fa-check"></i></span> Замените быстрые углеводы(мучные и сахарные продукты) на сложные углеводы(овсянка, гречка, овощи, ягоды, некоторые фрукты и другие). </li>
              <li><span class="primary-color"><i class="fa fa-check"></i></span> Пейте <span class="color-green">Beef Protein</span> и Тренируйтесь!</li>
            </ul>
            <div class="text-center">
              <a href="#" class="btn-app btn-app-p mt-2" data-toggle="modal" data-target="#appModal">Заказать</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERTIFICATES -->
  <section class="section pt-8 pb-8">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <h2 class="text-center text-uppercase mb-5"> Сертификаты</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-9 mx-auto">
          <div class="row">
            <div class="col-6 col-sm-4">
              <a target="_blank" href="/img/promo/collagen/sertificates/iso-9001-ru.jpg">
                <img class="img-responsive" src="/img/promo/collagen/sertificates/iso-9001-ru-mini.jpg"><br>
              </a>
            </div>
            <div class="col-6 col-sm-4">
              <a target="_blank" href="/img/promo/collagen/sertificates/Svidetelstvo-sport-pit.jpg">
                <img class="img-responsive" src="/img/promo/collagen/sertificates/Svidetelstvo-sport-pit-mini.jpg">
              </a>
            </div>
            <div class="col-6 col-sm-4">
              <a target="_blank" href="/img/promo/collagen/sertificates/Svidetelstvo-sport-pit-1.jpg">
                <img class="img-responsive" src="/img/promo/collagen/sertificates/Svidetelstvo-sport-pit-1-mini.jpg"><br><br>
              </a>
            </div>
            <div class="col-6 col-sm-4">
              <a target="_blank" href="/img/promo/collagen/sertificates/Декларация-о-соответствии-товара.jpg">
                <img class="img-responsive" src="/img/promo/collagen/sertificates/Декларация-о-соответствии-товара-mini.jpg"><br>
              </a>
            </div>
            <div class="col-6 col-sm-4">
              <a target="_blank" href="/img/promo/collagen/sertificates/Сертификат-качества.jpg">
                <img class="img-responsive" src="/img/promo/collagen/sertificates/Сертификат-качества-mini.jpg">
              </a><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHO NEEDS COLLAGEN -->
  <section class="section why-beefprotein">
    <div class="cover-dark">
      <div class="container">
        <div class="row no-gutters pt-8 pb-8">
          <div class="col-sm-12 col-lg-6">
            <h2 class="text-uppercase fz-50- text-white"> Почему нужен<br> <span class="primary-color">BEEF PROTEIN</span>?</h2>
            <!-- <p>Повышенная физическая нагрузка у спортсменов и как следствие недостаток аминокислот в организме приводит:</p> -->
            <p>При тяжелом физическом труде и спортивных нагрузках происходит истощение организма и хрящевой ткани. И как следствие происходит недостаток аминокислот в организме что приводит:</p>
            <ul class="list-who-needs-">
              <li><i class="fa fa-minus"></i> к мышечному стрессу</li>
              <li><i class="fa fa-minus"></i> к болям локтей и колен,</li>
              <li><i class="fa fa-minus"></i> подверженность организма к травмам,</li>
              <li><i class="fa fa-minus"></i> нервным расстройствам,
              <li><i class="fa fa-minus"></i> в итоге к ослаблению функций памяти и снижению иммунитета.</li>
            </ul>
            <p>В связи с этим многие принимают коллагеновый протеин, который восстанавливает и наращивает мышцы белком и укрепляет суставы и связки.</p>
            <!-- <p>Также недостаток аминокислот и кальция в организме приводит к ослаблению костей и плохому состоянию кожи, волос и ногтей. Что делает организм более подверженным к травмам и ущербам.</p> -->
            <!-- <p>Поэтому рекомендуется в период интенсивных тренировок принимать  коллагеновый протеин, который является строителем кожи, связок и соединительных тканей организма.</p> -->
          </div>
          <div class="col-sm-12 col-lg-6">
            <img class="d-block mt-5 mx-auto" src="/img/promo/collagen/banka-3kg.png" alt="">
            <div class="text-center">
              <a href="#" class="btn-app btn-app-p mt-2" data-toggle="modal" data-target="#appModal">Консультация</a>
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
          <h2 class="text-uppercase fz-50- primary-color">Преимущество</h2>
          <p>BEEF PROTEIN имеет международный сертификат HACCP, всю необходимую документацию и лабораторные анализы.</p>
          <p>Преимущества нашей продукции:</p>
          <ul class="list-benefist">


            <li><span class="primary-color"><i class="fa fa-check"></i></span> Полный состав Аминокислот</li>
            <li><span class="primary-color"><i class="fa fa-check"></i></span> Гибкость суставов и позвонков</li>
            <!-- <li><span class="primary-color"><i class="fa fa-check"></i></span> Высокая скорость усвоения</li> -->
            <li><span class="primary-color"><i class="fa fa-check"></i></span> Усвояемость продукта на 98%</li>
            <li><span class="primary-color"><i class="fa fa-check"></i></span> Повышает Иммунитет</li>
            <li><span class="primary-color"><i class="fa fa-check"></i></span> Рекомендует Казахская Академия Питания</li>
            <li><span class="primary-color"><i class="fa fa-check"></i></span> Минеральные вещества (кальций и магний),</li>
            <li><span class="primary-color"><i class="fa fa-check"></i></span> Жирорастворимые витамины А, Е, С, Д3 и В12.</li>
          </ul>
          <p>Ввиду очевидных преимуществ и при полном отсутствии негативных эффектов, данный вид спортивного питания идеален для решения задачи по построению качественной мускулатуры.</p>
          <!-- <p>Он является действительно качественным и эффективным «бонусом» для организма в плане белкового насыщения, которое в большинстве случаев невозможно естественным образом.</p> -->
        </div>
      </div>
    </div>
  </section>

  <!-- STANDARTS -->
  <section class="section bg-standarts pt-5 pb-3">
    <div class="container-fluid">
      <div class="row">
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
          <img src="/img/standarts/kap2.png" class="img-responsive">
        </div>
        <div class="col-4 col-sm-4 col-md-2 mb-2">
          <img src="/img/standarts/gmo2.png" class="img-responsive">
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
  <!-- <section class="section bg-black reviews-">
    <div class="reviews-overlay pt-8 pb-8">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 offset-sm-2">
            <h2 class="text-uppercase text-center fz-50- mb-5 white primary-color">Отзывы</h2>
          </div>
          <div class="col-md-4">
            <video width="320" height="240" controls>
              <source src="/video/collagen/video1.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
          <div class="col-md-4">
            <video width="320" height="240" controls>
              <source src="/video/collagen/video2.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
          <div class="col-md-4">
            <video width="320" height="240" controls>
              <source src="/video/collagen/video3.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
        </div>
      </div>
    </div>
  </section> -->

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
  <!-- Message Status -->
  @if (session('status'))
    <script type="text/javascript">
      $('#message-status').modal('show');
    </script>
  @endif
@endsection
