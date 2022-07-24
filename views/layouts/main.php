<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru-RU" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#page-top">Телесеть уфа</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="hidden">
          <a href="#page-top"></a>
        </li>
        <li class="page-scroll">
          <a href="#portfolio">Тарифы</a>
        </li>
        <li class="page-scroll">
          <a href="#about">О нас</a>
        </li>
        <li class="page-scroll">
          <a href="#contact-test">Оставить заявку</a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

<header>
  <div class="container background-main" id="page-top">
    <div class="row">
      <div class="col-lg-12">
        <div class="intro-text">
          <span class="name">Телесеть-Уфа</span>
          <hr class="star-light" />
          <span class="skills">Мы делаем ваш мир ярче!</span>
        </div>
      </div>
    </div>
  </div>
</header>

<?= $content ?>

<footer class="text-center">
  <div class="footer-above">
    <div class="container">
      <div class="row">
        <div class="footer-col col-md-4">
          <h3>Найти нас</h3>
          <p>
            г. Уфа, ул. 40 лет Октября, д. 7/1<br>
            ПН-ПТ 10.00-20.00<br>
            БЕЗ ОБЕДА
          </p>
        </div>
        <div class="footer-col col-md-4">
          <h3>Связаться с нами</h3>
          <ul class="list-inline">
            <li>
              <a href="tel:+73472403000" target="_blank" class="btn-social btn-outline">
                <svg x="0px" y="0px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Phone">
                  <g>
                    <ellipse stroke="null" ry="255.5" rx="255.49998" id="svg_5" cy="256.50001" cx="258.49999" fill="#20df40"/>
                    <ellipse ry="0.5" rx="53.5" id="svg_6" cy="225.5" cx="206.5" stroke="null" fill="#20df40"/>
                    <path id="svg_2" d="m393,335c-10,-9 -22,-17 -33,-23c-23,-16 -43,-17 -59,6c-10,14 -23,16 -37,10c-39,-18 -68,-43 -84,-82c-8,-16 -8,-31 10,-42c9,-6 19,-14 18,-28c-1,-18 -44,-78 -62,-84c-8,-2 -14,-2 -22,0c-41,14 -57,46 -42,85a451,451 0 0 0 251,248l17,5c26,0 57,-25 67,-50c9,-24 -10,-34 -24,-45z" fill="#fff"/>
                    <path id="svg_3" d="m268,138s41,-1 72,30c31,30 27,74 27,74m-87,-63s18,-2 33,14c15,15 13,34 13,34m-71,-129s64,-3 111,44c47,48 43,114 43,114" stroke-width="17" stroke-linecap="round" stroke="#fff" fill="none"/>
                  </g>
                </svg>
              </a>
            </li>
            <li>
              <a href="https://web.telegram.org/k/#@teleset_ufa_bot" target="_blank" class="btn-social btn-outline">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<circle style="fill:#47B0D3;" cx="256" cy="256" r="256"/>
                  <path style="fill:#3298BA;" d="M34.133,256c0-135.648,105.508-246.636,238.933-255.421C267.424,0.208,261.737,0,256,0
	C114.615,0,0,114.615,0,256s114.615,256,256,256c5.737,0,11.424-0.208,17.067-0.579C139.642,502.636,34.133,391.648,34.133,256z"/>
                  <path style="fill:#E5E5E5;" d="M380.263,109.054c-2.486-1.69-5.676-1.946-8.399-0.679L96.777,236.433
	c-4.833,2.251-7.887,7.172-7.766,12.501c0.117,5.226,3.28,9.92,8.065,12.015l253.613,110.457c8.468,3.849,18.439-2.21,18.983-11.453
	l14.314-243.341C384.161,113.614,382.748,110.742,380.263,109.054z"/>
                  <polygon style="fill:#CCCCCC;" points="171.631,293.421 188.772,408 379.168,108.432 "/>
                  <path style="fill:#FFFFFF;" d="M371.866,108.375L96.777,236.433c-4.737,2.205-7.826,7.121-7.769,12.345
	c0.058,5.233,3.276,10.074,8.067,12.171l74.557,32.471l207.536-184.988C376.882,107.33,374.203,107.287,371.866,108.375z"/>
                  <polygon style="fill:#E5E5E5;" points="211.418,310.749 188.772,408 379.168,108.432 "/>
                  <path style="fill:#FFFFFF;" d="M380.263,109.054c-0.351-0.239-0.72-0.442-1.095-0.622l-167.75,202.317l139.27,60.657
	c8.468,3.849,18.439-2.21,18.983-11.453l14.314-243.341C384.161,113.614,382.748,110.742,380.263,109.054z"/>
                  </svg>
              </a>
            </li>
            <li>
              <a href="mailto:office@teleset-ufa.ru" target="_blank" class="btn-social btn-outline">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<circle style="fill:#386895;" cx="256" cy="256" r="256"/>
                  <path style="fill:#273B7A;" d="M511.902,249.006l-49.895-49.895l-149.118,28.444L84.471,357.047l154.367,154.367
	C244.512,511.79,250.232,512,256,512c141.384,0,256-114.616,256-256C512,253.661,511.964,251.33,511.902,249.006z"/>
                  <path style="fill:#FFFFFF;" d="M462.007,199.111l-102.815-89.967c-4.387-3.839-11.89-1.121-11.89,4.31v39.776h-171.48
	c-6.654,0-12.05,4.72-12.05,10.545v70.677c0,5.823,5.396,10.545,12.05,10.545H347.3v39.776c0,5.43,7.502,8.149,11.89,4.31
	L462.007,199.111z"/>
                  <rect x="84.471" y="199.111" style="fill:#FEE187;" width="236.899" height="157.927"/>
                  <rect x="202.852" y="199.111" style="fill:#FFC61B;" width="118.529" height="157.927"/>
                  <polygon style="fill:#E59413;" points="321.376,199.111 202.924,278.08 84.471,199.111 "/>
                  <polygon style="fill:#D48B07;" points="321.376,199.111 202.847,199.111 202.847,278.028 202.924,278.08 "/>
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <div class="footer-col col-md-4">
          <h3>Другие ссылки</h3>
          <a href="https://teleset-ufa.ru/" target="_blank">Основной сайт</a><br>
          <a href="/privacy-policy" target="_blank">Политика конфиденциальности</a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-below">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <img src="/img/footer-logo.png" alt="">
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="scroll-top page-scroll visible-xs visible-sm">
  <a class="btn btn-primary" href="#page-top">
    <i class="fa fa-chevron-up"></i>
  </a>
</div>

<script src="/js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/js/jquery.easing.min.js"></script>
<script src="/js/classie.js"></script>
<script src="/js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="/js/jqBootstrapValidation.js"></script>

<script src="/js/contact_me_static.js"></script>

<script src="/js/contact_me.js"></script>


<!-- Custom Theme JavaScript -->
<script src="/js/freelancer.js"></script>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
