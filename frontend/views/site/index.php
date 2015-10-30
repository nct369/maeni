<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Maeni';
?>
<div class="loading-home"><img id="logo" src="/furniture/logo_gold.png" alt="Logo" style="opacity: 0"></div>
<nav class="home">
    <ul>
        <?php foreach ($categories as $category) : ?>
            <li><a href="<?=Url::to(['site/collection','slug'=>$category->slug])?>"><?=$category->name?></a></li>
        <?php endforeach; ?>
    </ul>
</nav><img id="bg-img" src="/images/bg.jpg" alt="bg">
