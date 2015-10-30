<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\models\Category;

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100&subset=latin,latin-ext,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="border <?=(Yii::$app->controller->action->id=='index')?'home':''?> top"></div>
    <div class="border <?=(Yii::$app->controller->action->id=='index')?'home':''?> bottom"></div>
    <div class="border <?=(Yii::$app->controller->action->id=='index')?'home':''?> left"></div>
    <div class="border <?=(Yii::$app->controller->action->id=='index')?'home':''?> right"></div>
    <div id="site" class="<?=(Yii::$app->controller->action->id=='index')?'home':''?>">
    <header>
      <nav><span>Store locator: Azerbaijan, Baku</span>
        <ul>
          <li><a href="http://mail.ru">Russia, Moscow</a></li>
          <li><a href="http://mail.ru">UK, London</a></li>
          <li><a href="http://mail.ru">Germany, Berlin</a></li>
          <li><a href="http://mail.ru">Ukraine, Kiev</a></li>
        </ul>
      </nav>
      <div class="navcenter"><a href="<?=Url::to(['site/login'])?>">Login</a><span>|</span><a href="<?=Url::to(['site/signup'])?>">Register</a></div>
      <div class="cart"><a href="http://mail.ru">Shopping cart</a></div>
      <nav><span>Language: in english</span>
        <ul>
          <li><a href="http://mail.ru">по-русски</a></li>
          <li><a href="http://mail.ru">azərbaycanca</a></li>
        </ul>
      </nav>
    </header>
    
    <?php if(Yii::$app->controller->action->id!='index'): ?>
    <div class="loading"><img id="logo" src="/furniture/logo_white_small.png" alt="Logo" style="opacity: 0"></div>
    <nav class="menu"><span class="text">MENU</span><img src="/furniture/close.png" alt="" class="icon">
      <ul>
        <li><a href="<?=Url::to(['site/index'])?>">HOME</a></li>
        <?php foreach (Category::find()->all() as $category) : ?>
            <li><a href="<?=Url::to(['site/collection','slug'=>$category->slug])?>"><?=$category->name?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>
    <?php endif; ?>
    
    <?=$content?>
    
    <div class="frame <?=(Yii::$app->controller->action->id=='index')?'home':''?>"></div>
    <footer class="<?=(Yii::$app->controller->action->id=='index')?'home':''?>"><span class="text">
        MAENI s.n.c Via Pasubio, 7/C-43100-Parma-Italy Tel: +39 0521 772156-773763 r.a Fax +390521 773117-789545 &nbsp;
        <a href="mailto:office@maeni.com" class="<?=(Yii::$app->controller->action->id=='index')?'home':''?>">office@maeni.com</a></span>
      <nav><span>World of Maeni</span>
        <ul>
          <li><a href="http://mail.ru">World of Maeni</a></li>
          <li><a href="http://mail.ru">Customer care</a></li>
          <li><a href="http://mail.ru">Corporate</a></li>
          <li><a href="http://mail.ru">Follow us</a></li>
          <li><a href="http://mail.ru">Newsletter</a></li>
          <li><a href="http://mail.ru">Contacts</a></li>
        </ul>
      </nav>
    </footer>
    </div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>