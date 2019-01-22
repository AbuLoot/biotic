@extends('layout')

@section('title_description', $project->title)

@section('meta_description', $project->meta_description)

@section('head')
  <link href="https://fonts.googleapis.com/css?family=Philosopher&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="/css/epimedium/my.css" type="text/css" media="all"/>
@endsection


@section('content')
  <header class="bg-header mt-5 pt-3">
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="branding__logo">
              <a href="/">
                <img src="/img/sidra/logo.png" alt="Sidra" class="mw-150">
                <!-- <img src="img/logo.png" alt="Biotic"> -->
              </a>
              <h3 class="heading small fz-26 white ts-1"> Натуральный продукт</h3>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- <div class="text-center dark mt-2">
              <a href="#wholesalers" class="text-uppercase"><u>Оптовикам</u></a>
              Лучшие цены
            </div> -->
          </div>
          <div class="col-sm-4">
            <div class="phones">
              <a href="tel:+77759557171" target="_top" data-attr="phone"><i class="fa fa-phone"></i> 8 (775) 955 71 71</a>
              <a href="whatsapp://send?phone=+77759557171" target="_top" data-attr="whatsapp_call"><i class="fa fa-whatsapp"></i> 8 (775) 955 71 71</a>
            </div>
          </div>
        </div>
        <div class="row header-main-content" -style=" background-color: #000;">
          <div class="col-sm-6">
            <h3 class="heading white text-uppercase header-title"> Эпимедиумная<br> Паста</h3>
            <p class="white fz-20 lh-24 ls-1 mt-2" style="text-shadow: 1px 1px 20px #000;">Уникальный рецепт половой силы и здоровья для мужчин и женщин из Турции</p>
            <!-- <br> -->
            <!-- <h3 class="heading white header-price fz-60 "> <s class="fz-50 red">6900〒</s> &nbsp;</h3> -->
          </div>
          <div class="col-sm-6">
            <img src="/img/sidra/paste-bank.png" class="paste-bank">
            <img src="/img/sidra/made-in-turkey2.png" class="made-in-turkey">
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ABOUT -->
  <!-- <section class="section section-about">
    <div class="container">
      <div class="row">
        <div class="offset-sm-1 col-sm-5">
          <img src="/img/sidra/spoon-epimedyum-text.jpg"  class="img-responsive rounded" alt="" />
        </div>
        <div class="col-sm-5">
          <h4 class="fw-normal mt-5 lh-30 fz-22">Компания SIDRA GIDA SANAYI TIC. LTD c торговой маркой «Sidra»  предлагает уникальный рецепт полового здоровья для мужчин и женщин, сохранившийся со времен рассвета Османской Империи.</h4>
          <div class="mt-4"></div>
          <p class="dark">Чрезвычайно сильный БАД, повышающий либидо, и полностью состоящий из отборных трав и натуральных ингредиентов с высочайшей биологической ценностью для организма.</p>
        </div>
      </div>
    </div>
  </section> -->

  <!-- FOR MAN -->
  <section class="section section-bg-man">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 p-0">
          <div class="section-custom-padding pl-5 pr-1">
            <h3 class="text-uppercase white">Полезные свойства эпимедиумной пасты <span class="primary-color">для мужчин</span></h3>
            <div class="mb-3"></div>
            <!-- <p class="white fz-22">Полезные свойства эпимедиумной пасты для мужчин.</p> -->
            <div class="row">
              <div class="col-md-6">
                <ul class="moody-list moody-list--icon">
                  <li class="moody-list__item mb-1">
                    <div class="moody-list__header">
                      <div class="moody-list__marker primary-color">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="moody-list__heading">
                        <p class="moody-list__title fz-18 white">Усиливает эррекцию</p>
                      </div>
                    </div>
                  </li>
                  <li class="moody-list__item mb-1">
                    <div class="moody-list__header">
                      <div class="moody-list__marker primary-color">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="moody-list__heading">
                        <p class="moody-list__title fz-18 white">Продлевает половой акт</p>
                      </div>
                    </div>
                  </li>
                  <li class="moody-list__item mb-1">
                    <div class="moody-list__header">
                      <div class="moody-list__marker primary-color">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="moody-list__heading">
                        <p class="moody-list__title fz-18 white">Оздоравливает состояние мочеполовой системы, особенно почек и простаты (предстательной железы)</p>
                      </div>
                    </div>
                  </li>
                  <li class="moody-list__item mb-1">
                    <div class="moody-list__header">
                      <div class="moody-list__marker primary-color">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="moody-list__heading">
                        <p class="moody-list__title fz-18 white">Обостряет чувствительность</p>
                      </div>
                    </div>
                  </li>
                  <li class="moody-list__item mb-1">
                    <div class="moody-list__header">
                      <div class="moody-list__marker primary-color">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="moody-list__heading">
                        <p class="moody-list__title fz-18 white">Избавляет от преждевременной эякуляции</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="moody-list moody-list--icon">
                  <li class="moody-list__item mb-1">
                    <div class="moody-list__header">
                      <div class="moody-list__marker primary-color">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="moody-list__heading">
                        <p class="moody-list__title fz-18 white">Усиливает наслаждение и желание</p>
                      </div>
                    </div>
                  </li>
                  <li class="moody-list__item mb-1">
                    <div class="moody-list__header">
                      <div class="moody-list__marker primary-color">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="moody-list__heading">
                        <p class="moody-list__title fz-18 white">Увеличивает количество сперматозоидов, увеличивает их подвижность и плостность</p>
                      </div>
                    </div>
                  </li>
                  <li class="moody-list__item mb-1">
                    <div class="moody-list__header">
                      <div class="moody-list__marker primary-color">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="moody-list__heading">
                        <p class="moody-list__title fz-18 white">Улучшает работу репродуктивной системы в целом</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

            <div class="text-center-">
              <h3 class="white">Цена 5900<span class="fz-25">〒</span></h3>
              <div class="bg-dark p-1 white">Отпускается без рецепта врача, не является лекарственным средством</div>
              <!-- <p class="white">Доставка <span class="fz-24 badge badge-warning">2-3 дня</span> во все регионы Казахстана</p> -->
              <a href="#" class="btn-app btn-app-p mt-2" data-toggle="modal" data-target="#appModal">Заказать</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOR WOMAN -->
  <section class="section section-bg-woman">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 p-0"></div>
        <div class="col-sm-7 p-0">
          <div class="section-custom-padding pl-5 pr-1">
            <h3 class="text-uppercase">Полезные свойства эпимедиумной пасты <span class="primary-color">для женщин</span></h3>
            <div class="mb-3"></div>
            <div class="row">
              <div class="col-md-6">
                <ul class="moody-list moody-list--icon">
                  <li class="moody-list__item mb-1">
                    <div class="moody-list__header">
                      <div class="moody-list__marker primary-color">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="moody-list__heading">
                        <p class="moody-list__title fz-18 dark">Усиливает наслаждение и желание</p>
                      </div>
                    </div>
                  </li>
                  <li class="moody-list__item mb-1">
                    <div class="moody-list__header">
                      <div class="moody-list__marker primary-color">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="moody-list__heading">
                        <p class="moody-list__title fz-18 dark">Решает проблему сухости влагалища, увеличивая секрецию желез</p>
                      </div>
                    </div>
                  </li>
                  <li class="moody-list__item mb-1">
                    <div class="moody-list__header">
                      <div class="moody-list__marker primary-color">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="moody-list__heading">
                        <p class="moody-list__title fz-18 dark">Высвобождает женский гормон эстроген</p>
                      </div>
                    </div>
                  </li>
                  <li class="moody-list__item mb-1">
                    <div class="moody-list__header">
                      <div class="moody-list__marker primary-color">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="moody-list__heading">
                        <p class="moody-list__title fz-18 dark">Решает проблему нарушения менструального цикла, существенно облегчает климакс</p>
                      </div>
                    </div>
                  </li>
                  <li class="moody-list__item mb-1">
                    <div class="moody-list__header">
                      <div class="moody-list__marker primary-color">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="moody-list__heading">
                        <p class="moody-list__title fz-18 dark">Применяется в лечении бесплодия</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="moody-list moody-list--icon">

                  <li class="moody-list__item mb-1">
                    <div class="moody-list__header">
                      <div class="moody-list__marker primary-color">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="moody-list__heading">
                        <p class="moody-list__title fz-18 dark">Борется с воспалительными процессами в малом тазу</p>
                      </div>
                    </div>
                  </li>
                  <li class="moody-list__item mb-1">
                    <div class="moody-list__header">
                      <div class="moody-list__marker primary-color">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="moody-list__heading">
                        <p class="moody-list__title fz-18 dark">Эффективен при лечении нарушения функции яичников</p>
                      </div>
                    </div>
                  </li>
                  <li class="moody-list__item mb-1">
                    <div class="moody-list__header">
                      <div class="moody-list__marker primary-color">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="moody-list__heading">
                        <p class="moody-list__title fz-18 dark">Применяется при лечении мастопатии, гипофункции половых желез, воспалительных заболеваний половых органов</p>
                      </div>
                    </div>
                  </li>
                  <li class="moody-list__item mb-1">
                    <div class="moody-list__header">
                      <div class="moody-list__marker primary-color">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="moody-list__heading">
                        <p class="moody-list__title fz-18 dark">Оздоравливает работу репродуктивной системы в целом</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="text-center">
                <h3>Цена 5900<span class="fz-25">〒</span></h3>
                <!-- <p class="fz-18 dark">Доставка <span class="fz-24 badge badge-warning">2-3 дня</span> по Казахстану</p> -->
                <a href="#" class="btn-app btn-app-p mt-2" data-toggle="modal" data-target="#appModal">Доставить</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PASTE COMPOSITION -->
  <section class="section section-custom-padding ">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="text-center">
            <h3 class="heading fw-normal fz-40">Экстракт травы Эпимедиума</h3>
            <div class="mb-8"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <img src="/img/sidra/epimedium-ot-besplodiya-i-seksualnyh-disfunktsii.jpg" class="rounded"><br><br>
        </div>
        <div class="col-sm-6">
          <h3 class="fw-normal fz-30 mb-3">Общие полезные свойства:</h3>
          <ul class="moody-list moody-list--icon">
            <li class="moody-list__item mb-1">
              <div class="moody-list__header">
                <div class="moody-list__marker primary-color">
                  <i class="fa fa-check"></i>
                </div>
                <div class="moody-list__heading">
                  <p class="moody-list__title fz-18 dark">Повышает выносливость организма, заряжает энергией</p>
                </div>
              </div>
            </li>
            <li class="moody-list__item mb-1">
              <div class="moody-list__header">
                <div class="moody-list__marker primary-color">
                  <i class="fa fa-check"></i>
                </div>
                <div class="moody-list__heading">
                  <p class="moody-list__title fz-18 dark">Стимулирует умственную активность, улучшает память и внимание</p>
                </div>
              </div>
            </li>
            <li class="moody-list__item mb-1">
              <div class="moody-list__header">
                <div class="moody-list__marker primary-color">
                  <i class="fa fa-check"></i>
                </div>
                <div class="moody-list__heading">
                  <p class="moody-list__title fz-18 dark">Эффективен при неврастинии и неврозах</p>
                </div>
              </div>
            </li>
            <li class="moody-list__item mb-1">
              <div class="moody-list__header">
                <div class="moody-list__marker primary-color">
                  <i class="fa fa-check"></i>
                </div>
                <div class="moody-list__heading">
                  <p class="moody-list__title fz-18 dark">Снимает усталость и стресс</p>
                </div>
              </div>
            </li>
            <li class="moody-list__item mb-1">
              <div class="moody-list__header">
                <div class="moody-list__marker primary-color">
                  <i class="fa fa-check"></i>
                </div>
                <div class="moody-list__heading">
                  <p class="moody-list__title fz-18 dark">Оказывает благотворное влияние на нервную систему в целом</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div><br>
      <div class="row">
        <div class="col-sm-6 order-xs-2">
          <ul class="moody-list moody-list--icon">
            <li class="moody-list__item mb-1">
              <div class="moody-list__header">
                <div class="moody-list__marker primary-color">
                  <i class="fa fa-check"></i>
                </div>
                <div class="moody-list__heading">
                  <p class="moody-list__title fz-18 dark">Нормализует кровяное давление и стимулирует кровоток в организме</p>
                </div>
              </div>
            </li>
            <li class="moody-list__item mb-1">
              <div class="moody-list__header">
                <div class="moody-list__marker primary-color">
                  <i class="fa fa-check"></i>
                </div>
                <div class="moody-list__heading">
                  <p class="moody-list__title fz-18 dark">Укрепляет иммунитет</p>
                </div>
              </div>
            </li>
            <li class="moody-list__item mb-1">
              <div class="moody-list__header">
                <div class="moody-list__marker primary-color">
                  <i class="fa fa-check"></i>
                </div>
                <div class="moody-list__heading">
                  <p class="moody-list__title fz-18 dark">Омолаживает организм</p>
                </div>
              </div>
            </li>
            <li class="moody-list__item mb-1">
              <div class="moody-list__header">
                <div class="moody-list__marker primary-color">
                  <i class="fa fa-check"></i>
                </div>
                <div class="moody-list__heading">
                  <p class="moody-list__title fz-18 dark">Препятствует образованию морщин (старению кожи)</p>
                </div>
              </div>
            </li>
            <li class="moody-list__item mb-1">
              <div class="moody-list__header">
                <div class="moody-list__marker primary-color">
                  <i class="fa fa-check"></i>
                </div>
                <div class="moody-list__heading">
                  <p class="moody-list__title fz-18 dark">Косвенно влияет на потерю избыточного в веса</p>
                </div>
              </div>
            </li>
            <li class="moody-list__item mb-1">
              <div class="moody-list__header">
                <div class="moody-list__marker primary-color">
                  <i class="fa fa-check"></i>
                </div>
                <div class="moody-list__heading">
                  <p class="moody-list__title fz-18 dark">Борется с гипоксией</p>
                </div>
              </div>
            </li>
            <li class="moody-list__item mb-1">
              <div class="moody-list__header">
                <div class="moody-list__marker primary-color">
                  <i class="fa fa-check"></i>
                </div>
                <div class="moody-list__heading">
                  <p class="moody-list__title fz-18 dark">Обладает антивирусными и даже противоопухолевыми свойствами</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-sm-6 order-xs-1">
          <img src="/img/sidra/paste-with-bg.jpeg" class="rounded"><br><br>
        </div>
      </div>
    </div>
  </section>

  <!-- COMPOSITION -->
  <section class="section bg-green section-custom-padding composition">
    <div class="container">
      <h2 class="heading fz-40 white mb-4 text-center">Состав эпимедиумной пасты:</h2>
      <div class="row white">
        <div class="offset-sm-4- col-sm-6">
          <p>Эпимедиумная Паста состоит из отборных, полезнейших натуральных ингредиентов, известных своими лечебными свойствами и имеющих высочайшую биологическую ценность для человека.</p>
          <p>Основным продуктом в ее составе является Экстракт травы Эпимедиума (Горянки), которая, одинаково эффективно влияет на повышение мужского и женского либидо, не смотря на разный гормональный фон у мужчин и женщин. Он действует наподобие половых гормонов и способен стимулировать собственные половые железы (гонадотропное действие), повышая сексуальную активность и влечение к противоположному полу.</p><br>
        </div>
        <div class="offset-sm-4- col-sm-6">
          <!-- <h4 class="white mt-2 mb-2">Эпимедиумная паста содержит в составе:</h4> -->
          <div class="row fz-15 lh-22">
            <div class="col-sm-4">
              <ul class="list  list--circle">
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker yellow"></div>
                    <div class="list__heading">Экстракт Эпимедиума (Epimedium, Горянка корейская);</div>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker yellow"></div>
                    <div class="list__heading">Лиофилизированное Маточное молочко;</div>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker yellow"></div>
                    <div class="list__heading">Пчелиная пыльца;</div>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker yellow"></div>
                    <div class="list__heading">Цветочный мед;</div>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker yellow"></div>
                    <div class="list__heading">Экстракт Трибулуса (Tribulus, Колючая лоза);</div>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker yellow"></div>
                    <div class="list__heading">Мака Перуанская (Lepidium);</div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-sm-4">
              <ul class="list  list--circle">
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker yellow"></div>
                    <div class="list__heading">Экстракт листьев Гинкго Билоба (Ginkgo Biloba);</div>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker yellow"></div>
                    <div class="list__heading">Порошок плодов Рожкового дерева (Цератоний стручковый);</div>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker yellow"></div>
                    <div class="list__heading">Американский Женьшень;</div>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker yellow"></div>
                    <div class="list__heading">Сибирский Женьшень;</div>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker yellow"></div>
                    <div class="list__heading">Красный Женьшень;</div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-sm-4">
              <ul class="list  list--circle">
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker yellow"></div>
                    <div class="list__heading">Имбирь;</div>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker yellow"></div>
                    <div class="list__heading">Корень Калгана;</div>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker yellow"></div>
                    <div class="list__heading">Корица;</div>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker yellow"></div>
                    <div class="list__heading">Листья Колы;</div>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker yellow"></div>
                    <div class="list__heading">Листья Крапивы;</div>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker yellow"></div>
                    <div class="list__heading">Тыква и т.д.</div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INSTRUCTION -->
  <section class="section box-section-shadow section-custom-padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-6 dark">
          <h3 class="heading fz-30 mb-3">Инструкция по применению:</h3>

          <ul class="list list--circle">
            <li class="list__item">
              <div class="list__header">
                <div class="list__marker primary-color"></div>
                <div class="list__heading">Перед каждым употреблением обязательно перемешивать содержимое в банке. Рекомендуется использовать деревянную или пластиковую ложку. Желательно употреблять через час после еды.</div>
              </div>
            </li>
            <li class="list__item">
              <div class="list__header">
                <div class="list__marker primary-color"></div>
                <div class="list__heading">Для общего укрепления организма принимать один раз в день 1/3 чайной ложки.</div>
              </div>
            </li>
            <li class="list__item">
              <div class="list__header">
                <div class="list__marker primary-color"></div>
                <div class="list__heading">Для тех, кто проводит курс лечения принимать ежедневно 1/3 чайной ложки два раза в день.</div>
              </div>
            </li>
            <li class="list__item">
              <div class="list__header">
                <div class="list__marker primary-color"></div>
                <div class="list__heading">Для повышения сексуального либидо принимать 1/3 чайной ложки за 30-40 минут до полового акта.</div>
              </div>
            </li>
            <li class="list__item">
              <div class="list__header">
                <div class="list__marker primary-color"></div>
                <div class="list__heading">Для занятия спортом принимать 1/3 чайной ложки за 30-40 минут перед тренировкой.</div>
              </div>
            </li>
            <li class="list__item">
              <div class="list__header">
                <div class="list__marker primary-color"></div>
                <div class="list__heading">Максимальная разовая доза одна чайная ложка. Для повторного курса необходимо сделать перерыв 7-10 дней.</div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-6 dark">
          <h3 class="heading fz-30 mb-3">Побочные эффекты</h3>
          <p>Возможна головная боль при первых приёмах у тех, кто страдает вегето-сосудистой дистонией. На четвертый, или пятый день приёма пасты головная боль проходит, так как паста улучшает кровообращение, что способствует нормальной работе сосудов головного мозга.</p>
          <h3 class="heading fz-30 mt-3 mb-3">Противопоказания</h3>
          <!-- <p>Индивидуальная непереносимость ингредиентов. Не совместима с алкоголем.</p> -->
          <p>Не рекомендуется использовать продукт беременным, кормящим, а также у кого сахарный диабет и болезни сердца, необходимо проконсультироваться с врачом.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SERTIFICATES -->
  <section class="section box-section-shadow section-custom-padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="text-center">
            <h3 class="heading fz-40">Сертификаты</h3>
            <div class="mb-8"></div>
          </div>
        </div>
        <div class="col-6 col-sm-3">
          <a href="/img/sertificates-epimedium/certificate-gmp.png"><img src="/img/sertificates-epimedium/m-certificate-gmp.png" class="img-responsive center-block"></a><br><br>
        </div>
        <div class="col-6 col-sm-3">
          <a href="/img/sertificates-epimedium/certificate-iso.png"><img src="/img/sertificates-epimedium/m-certificate-iso.png" class="img-responsive center-block"></a>
        </div>
        <div class="col-6 col-sm-3">
          <a href="/img/sertificates-epimedium/certificate-iso-9001.png"><img src="/img/sertificates-epimedium/m-certificate-iso-9001.png" class="img-responsive center-block"></a><br><br>
        </div>
        <div class="col-6 col-sm-3">
          <a href="/img/sertificates-epimedium/certificate-helal.png"><img src="/img/sertificates-epimedium/m-certificate-helal.png" class="img-responsive center-block"></a>
        </div>
      </div>
    </div>
  </section>

  <!-- PRICE -->
  <section class="section bg-price">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 order-xs-2">
          <img src="/img/sidra/paste-bank.png" class="bank-of-paste">
        </div>
        <div class="col-sm-12 col-md-4 order-xs-1">
          <h2 class="price-of-paste">Эпимедиумная паста «Sidra»</h2>
          <!-- <ul class="pricing-list">
            <li><i class="fa fa-check  primary-color"></i> <span class="m-1">Консультация</span></li>
            <li><i class="fa fa-check  primary-color"></i> <span class="m-1">Доставка во все регионы</span></li>
            <li><i class="fa fa-check  primary-color"></i> <span class="m-1">Лучшая Цена</span></li>
            <li><i class="fa fa-check  primary-color"></i> <span class="m-1">Оригинальный продукт</span></li>
          </ul> -->
          <h3>Цена 5900<span class="fz-25">〒</span></h3>
          <!-- <p class="fz-18">Доставка <span class="fz-24 badge badge-warning">2-3 дня</span> по Казахстану</p> -->
          <div class="text-center-">
            <a href="#" class="btn-app btn-app-p mt-2" data-toggle="modal" data-target="#appModal">Заказать</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- DELIVERY & WHOLESALERS -->
  <!-- <section class="section box-section-shadow section-custom-padding" id="wholesalers">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-6">
          <h3 class="heading fw-normal mt-3 mb-3 text-center">Доставка</h3>
          <p>Доставка по Казахстану — 1400 тенге (в зависимости от количества). Доставим до двери.</p>
          <p>Доставка по городу Алматы — от 600 тенге(в зависимости от количества). Доставим до двери.</p>
        </div>
        <div class="col-sm-12 col-lg-6">
          <h3 class="heading fw-normal mt-3 mb-3 text-center">Оптовикам</h3>
          <p>Торговая компания Biotic специализируется на продаже высококачественных, натуральных продуктов потребления из Казахстана, Турции.</p>
          <p>Основным направлением компании является оптовые и розничные продажи препаратов для здоровья, спортивного питания, натуральной пищи, ароматов.</p>
          <p>Приглашаем сотрудничать с нами по регионам. Предлагаем выгодные условия. Обращайтесь к нам и мы ответим на все интересующие вас вопросы.</p>
        </div>
      </div>
    </div>
  </section> -->

  <!-- FAQ -->
  <section class="section pt-10 pb-6">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h3 class="heading fw-normal fz-40 mb-8"> Часто задаваемые вопросы</h3>
          <div id="accordion" class="accordion">
            <div class="accordion-section">
              <div class="accordion-header active" id="headingOne">
                <h6 class="accordion-title">
                  <div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Оригинал?</div>
                  <span class="accordion-icon"></span>
                </h6>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="accordion-content">Да. Мы являемся официальным дилером, берем на заводе.</div>
              </div>
            </div>
            <div class="accordion-section">
              <div class="accordion-header" id="headingTwo">
                <h6 class="accordion-title">
                  <div class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Как вы можете это подтвердить?</div>
                  <span class="accordion-icon"></span>
                </h6>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="accordion-content">Если придете в наш офис можем показать наш дилерский контракт. Или можете связаться непосредственно с заводом по контактам указанным на упаковке, Вам подтвердят что мы являемся единственным дилером в Казахстане.</div>
              </div>
            </div>
            <div class="accordion-section">
              <div class="accordion-header" id="headingThree">
                <h6 class="accordion-title">
                  <div class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Это натуральный продукт?</div>
                  <span class="accordion-icon"></span>
                </h6>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="accordion-content">Да, это букет из 16-и различных трав настоянных на меде.</div>
              </div>
            </div>
            <div class="accordion-section">
              <div class="accordion-header" id="headingFour">
                <h6 class="accordion-title">
                  <div class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Как его нужно употреблять?</div>
                  <span class="accordion-icon"></span>
                </h6>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="accordion-content">
                  <p>Для общего укрепления организма принимать один раз в день пол кафейной ложки.</p>
                  <p>Для тех, кто проводит курс лечения принимать ежедневно пол кафейной ложки два раза в день.</p>
                  <p>Перед каждым употреблением нужно размешать содержимое банки.</p>
                </div>
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
                  <input type="hidden" name="project" value="epimedium">
                  <div class="row">
                    <div class="col-md-12"> 
                      <input type="text" name="name" placeholder="Введите имя*" minlength="2" maxlength="40" value="" required>
                    </div>
                    <div class="col-md-12">
                      <input type="tel" name="phone" placeholder="Введите номер телефона*" minlength="5" maxlength="20" value="" required>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" onclick="fbq('track', 'Lead');" class="button style-flat button-primary fullwidth mt-3">Отправить</button>
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

  <!-- CONTACT BUTTONS -->
  <div class="fixed-button">
    <a href="whatsapp://send?phone=+77759557171" target="_top" data-attr="whatsapp_call">
      <img src="img/whatsapp-logo.png">
    </a>
  </div>
  <div class="fixed-button2">
    <a href="tel:+77759557171" target="_top" data-attr="phone">
      <img src="img/phone-receiver.png">
    </a>
  </div>

  <!-- APP MODAL -->
  <div class="modal fade" id="appModal" tabindex="-1" role="dialog" aria-labelledby="appModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="appModalLabel"><i class="fa fa-envelope-o primary-color fz-30"></i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body row p-0">
          <div class="col-lg-6 p-5">
            <h3 class="heading fw-normal fz-32 mb-1">Заполните форму</h3>
            <p class="fz-20 dark mb-1">и наш менеджер свяжется с Вами в ближайшее время</p>
            <div class="contact-form-wrapper">
              <form method="post" action="/send-app">
                {{ csrf_field() }}
                <input type="hidden" name="project" value="epimedium">
                <div class="row">
                  <div class="col-md-12"> 
                    <input type="text" name="name" placeholder="Введите имя*" minlength="2" maxlength="40" value="" required>
                  </div>
                  <div class="col-md-12">
                    <input type="tel" name="phone" placeholder="Введите номер телефона*" minlength="5" maxlength="20" value="" required>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" onclick="fbq('track', 'Lead');" class="btn-app mt-3" data-toggle="modal" data-target="#appModal">Отправить</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="img/sidra/bank.png" class="d-block modal-bank-margin mx-auto">
          </div>
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
