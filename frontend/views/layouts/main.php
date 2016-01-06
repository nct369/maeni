<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\models\Category;
use yii\helpers\VarDumper;
use frontend\widgets\PlanWidget\PlanWidget;
use frontend\widgets\FilterWidget\FilterWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= PlanWidget::widget() ?>

<ul id="side-toolbar" class="side-nav fixed">
  <li class="toolbar_item"><a href="<?=Url::toRoute('site/index')?>"><img src="/images/toolbar-logo.png" width="28">Toyplan</a></li>
  <li class="toolbar_item"><a href="#" id="open-filter"><i class="zmdi zmdi-hc-3x zmdi-filter-list"></i>Filtr</a></li>
  <li class="toolbar_item"><a href="#" id="open-search"><i class="zmdi zmdi-hc-3x zmdi-search"></i>Axtar</a></li>
  <?php if(!Yii::$app->user->isGuest):?>
  <li class="toolbar_item"><a href="#" id="open-plan"><i class="zmdi zmdi-hc-3x zmdi-check-circle"></i>Plan</a></li>
  <?php endif;?>
  <li class="toolbar_item"><a href="/checklist"><i class="zmdi zmdi-hc-3x zmdi-star"></i>Favorit</a></li>
  <li class="single-row-nav">
    <a id="category-sidenav-btn" class="waves-effect waves-black btn-flat row-nav-btn">kategoriyalar</a>
  </li>
</ul>
<div class="container">
<div class="row">
  <!-- HEADER  -->
  <header>
    <div class="menu">
      <nav class="z-depth-1 border-radius main-menu">
        <a href="#" data-activates="side-toolbar" class="button-collapse toolbar"><i class="zmdi zmdi-settings"></i></a>
        <a href="<?=Url::toRoute('site/index')?>" class="brand-logo center hide-on-large-only">Toyplan</a>
        <ul class="left hide-on-med-and-down">
          <li><a href="<?=Url::toRoute('site/about')?>">Haqqımızda</a></li>
          <li><a href="<?=Url::toRoute('site/terms')?>">Şərtlər</a></li>
          <li><a href="<?=Url::toRoute('news/index')?>">Xəbərlər</a></li>
          <li><a href="<?=Url::toRoute('blog/index')?>">Blog</a></li>
          <li><a href="<?=Url::toRoute('site/contact')?>">Əlaqə</a></li>
        </ul>
        <ul class="right hide-on-med-and-down header_login">
          <?php if (Yii::$app->user->isGuest) { ?>
            <a data-target="signup" class="waves-effect waves-black btn-flat modal-trigger">Qeydiyyat</a>
            <a href="<?=Url::toRoute('site/login')?>" class="waves-effect waves-black btn white">Daxil ol</a>
          <?php }else{ ?>
            <a href="/site/logout" data-method="post">Çıxış</a>
          <?php } ?>
        </ul>
        <ul class="right hide-on-med-and-down sosial_links">
          <li><a href="https://www.facebook.com/" target="_blank">
            <div class="social-btn z-depth-1"><i class="zmdi zmdi-facebook"></i></div>
          </a></li>
          <li><a href="https://twitter.com/" target="_blank">
            <div class="social-btn z-depth-1"><i class="zmdi zmdi-twitter"></i></div>
          </a></li>
          <li><a href="https://instagram.com/" target="_blank">
            <div class="social-btn z-depth-1"><i class="zmdi zmdi-instagram"></i></div>
          </a></li>
          <li><a href="https://plus.google.com/" target="_blank">
            <div class="social-btn z-depth-1"><i class="zmdi zmdi-google-plus"></i></div>
          </a></li>
        </ul>
        <a href="#" data-activates="slide-menu" class="right button-collapse menu"><i class="zmdi zmdi-menu"></i></a>
      </nav>
      <nav class="z-depth-1 search-menu">
        <form>
          <div class="input-field">
            <input id="search" type="search" required>
            <label for="search"><i class="material-icons zmdi zmdi-hc-3x zmdi-search"></i></label>
            <i class="material-icons zmdi zmdi-hc-3x zmdi-close"></i>
          </div>
        </form>
      </nav>
      <ul id="slide-menu" class="side-nav">
          <li><a href="<?=Url::toRoute('site/login')?>">Daxil ol</a></li>
          <li><a data-target="signup" class="modal-trigger">Qeydiyyat</a></li>
          <li><a href="<?=Url::toRoute('site/about')?>">Haqqımızda</a></li>
          <li><a href="<?=Url::toRoute('site/terms')?>">Şərtlər</a></li>
          <li><a href="<?=Url::toRoute('news/index')?>">Xəbərlər</a></li>
          <li><a href="<?=Url::toRoute('blog/index')?>">Blog</a></li>
          <li><a href="<?=Url::toRoute('site/contact')?>">Əlaqə</a></li>
      </ul>
      
      <?= FilterWidget::widget() ?>
      
    </div>
  </header>
  
  <!--SIGN UP MODAL-->
  <div id="signup" class="modal">
    <div class="modal-content">
      <a href="<?=Url::toRoute('site/signup')?>" class="modal-action modal-close waves-effect waves-light btn"><i class="zmdi zmdi-account"></i> Istifadəçi kimi</a>
      <a href="<?=Url::toRoute('site/signup-company')?>" class="modal-action modal-close waves-effect waves-light btn"><i class="zmdi zmdi-mall"></i> Şirkət kimi</a>
    </div>
  </div>
  
</div>

<div class="row">
  <main>
    <?= Alert::widget() ?>
    <?= $content ?>
  </main>
</div>

<footer>
  <div class="row">
    <div class="footer_content z-depth-1">
      <span>&copy; Toyplan <?= date('Y') ?></span>
      <ul class="right">
        <li><a href="https://www.facebook.com/" target="_blank">
          <div class="social-btn z-depth-1"><i class="zmdi zmdi-facebook"></i></div>
        </a></li>
        <li><a href="https://twitter.com/" target="_blank">
          <div class="social-btn z-depth-1"><i class="zmdi zmdi-twitter"></i></div>
        </a></li>
        <li><a href="https://instagram.com/" target="_blank">
          <div class="social-btn z-depth-1"><i class="zmdi zmdi-instagram"></i></div>
        </a></li>
        <li><a href="https://plus.google.com/" target="_blank">
          <div class="social-btn z-depth-1"><i class="zmdi zmdi-google-plus"></i></div>
        </a></li>
      </ul>
    </div>
  </div>
</footer>

</div>
<div class="category-sidenav overflow-hidden">
  <div class="row">
    <div class="head-close-block">
      <i class="zmdi zmdi-hc-3x zmdi-close"></i>
    </div>
    <?php foreach(Category::find()->orderBy('id')->all() as $category): ?>
    <div class="col l2 m3 s6">
      <a href="/<?=$category->slug?>/">
        <div class="category-card">
          <img class="responsive-img z-depth-1" src="/uploads/categories/<?=$category->img?>">
          <span class="category-card-icon"><i class="zmdi zmdi-hc-3x <?=$category->icon?>"></i></span>
          <span class="category-card-title"><?=$category->name?></span>
        </div>
      </a>
    </div>
    <?php endforeach; ?>
  </div>
</div>
<div class="overlay-bg"></div>
<img class="overlay-img" alt="">
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
