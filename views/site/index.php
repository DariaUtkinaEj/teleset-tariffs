<?php

use app\components\Resizer;
use yii\bootstrap4\ActiveForm;

?>
<section id="portfolio">
  <div class="container portfolio-flex-grid">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>Тарифы</h2>
        <hr class="star-primary">
      </div>
    </div>
    <div class="portfolio-flex-row">

        <div class="portfolio-flex-item portfolio-item">
          <a href="#portfolioModal-1" class="portfolio-link" data-toggle="modal">
            <div class="caption">
              <div class="caption-content">
                <i class="fa fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img src="<?= Resizer::resize(380, 250, '/img/tariffs/tariff1.png')?>" class="img-responsive" alt="">
          </a>
        </div>

      <div class="portfolio-flex-item portfolio-item">
        <a href="#portfolioModal-2" class="portfolio-link" data-toggle="modal">
          <div class="caption">
            <div class="caption-content">
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?= Resizer::resize(380, 250, '/img/tariffs/tariff2.jpg')?>" class="img-responsive" alt="">
        </a>
      </div>

      <div class="portfolio-flex-item portfolio-item">
        <a href="#portfolioModal-3" class="portfolio-link" data-toggle="modal">
          <div class="caption">
            <div class="caption-content">
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?= Resizer::resize(380, 250, '/img/tariffs/tariff3.png')?>" class="img-responsive" alt="">
        </a>
      </div>

      <div class="portfolio-flex-item portfolio-item">
        <a href="#portfolioModal-4" class="portfolio-link" data-toggle="modal">
          <div class="caption">
            <div class="caption-content">
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?= Resizer::resize(380, 250, '/img/tariffs/tariff4.jpg')?>" class="img-responsive" alt="">
        </a>
      </div>

      <div class="portfolio-flex-item portfolio-item">
        <a href="#portfolioModal-5" class="portfolio-link" data-toggle="modal">
          <div class="caption">
            <div class="caption-content">
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?= Resizer::resize(380, 250, '/img/tariffs/tariff5.jpg')?>" class="img-responsive" alt="">
        </a>
      </div>

      <div class="portfolio-flex-item portfolio-item">
        <a href="#portfolioModal-6" class="portfolio-link" data-toggle="modal">
          <div class="caption">
            <div class="caption-content">
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?= Resizer::resize(380, 250, '/img/tariffs/tariff6.jpg')?>" class="img-responsive" alt="">
        </a>
      </div>

    </div>
  </div>
</section>

<section class="success" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>О нас</h2>
        <hr class="star-light">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-lg-offset-2">
        <p class="text-center">
            Мы — это сплоченный коллектив профессионалов-единомышленников, работающий на благо наших партнеров и клиентов более 10 лет.
        </p>
        <p class="text-center">
          Наш путь не был легок, и именно поэтому мы с пониманием относимся ко всем задачам и пожеланиям наших клиентов, а то, что мы делаем – мы делаем с душой, вкладывая весь наш накопленный опыт.
        </p>
      </div>
      <div class="col-lg-4">
        <p class="text-center">
          Наша компания всегда идет в ногу со временем, обеспечивая своим клиентам качественный сервис. Наши клиенты – это самая главная наша ценность.
        </p>
        <p class="text-center">
          Поэтому мы разработали для Вас пакет новых тарифов. Краткую презентацию тарифов можно найти выше, а полное описание — скачать ниже.
        </p>
      </div>
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <a href="/uploads/test.txt" target="_blank" class="btn btn-lg btn-outline">
          <i class="fa fa-download"></i>Скачать информацию о тарифах
        </a>
      </div>
    </div>
  </div>
</section>
<!-- Contact Section -->

<?php  $model = new app\models\ContactForm(); ?>

<section id="contact-test">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>Оставить заявку</h2>
        <hr class="star-primary">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
          <?php $form = ActiveForm::begin([
              'id' => 'contact-form',
              'action' => '/send-mail',
          ]); ?>
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <?= $form->field($model, 'name')->textInput()->label('Имя')->textInput(['placeholder' => 'Представтесь']) ?>
            </div>
          </div>
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <?= $form->field($model, 'email')->textInput()->label('Email')->textInput(['placeholder' => 'Ваш email']) ?>
            </div>
          </div>
          <?= $form->field($model, 'check', ['options' => ['class' => 'hidden']]) ?>
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <?= $form->field($model, 'message')->textarea()->label('Сообщение')->textInput(['placeholder' => 'Оставьте сообщение']) ?>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="row">
            <div class="form-group col-xs-12">
              <button type="submit" class="btn btn-success btn-lg">Отправить</button>
            </div>
          </div>
          <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</section>

<?php
$script = <<< JS
    $("#contactform-check").val('14');
JS;
$this->registerJs($script);
?>

<div class="portfolio-modal modal fade" id="portfolioModal-1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <h2>Тариф 1</h2>
            <hr class="star-primary">
            <img src="img/tariffs/tariff1.png" class="img-responsive img-centered" alt="">
            <h3>О тарифе</h3>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Закрыть</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal-2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <h2>Тариф 2</h2>
            <hr class="star-primary">
            <img src="img/tariffs/tariff2.jpg" class="img-responsive img-centered" alt="">
            <h3>О тарифе</h3>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Закрыть</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal-3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <h2>Тариф 3</h2>
            <hr class="star-primary">
            <img src="img/tariffs/tariff3.png" class="img-responsive img-centered" alt="">
            <h3>О тарифе</h3>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Закрыть</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal-4" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <h2>Тариф 4</h2>
            <hr class="star-primary">
            <img src="img/tariffs/tariff4.jpg" class="img-responsive img-centered" alt="">
            <h3>О тарифе</h3>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Закрыть</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal-5" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <h2>Тариф 5</h2>
            <hr class="star-primary">
            <img src="img/tariffs/tariff5.jpg" class="img-responsive img-centered" alt="">
            <h3>О тарифе</h3>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Закрыть</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal-6" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <h2>Тариф 6</h2>
            <hr class="star-primary">
            <img src="img/tariffs/tariff6.jpg" class="img-responsive img-centered" alt="">
            <h3>О тарифе</h3>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <p>Тест тест тест тест</p>
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Закрыть</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

