<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Maeni';
?>
<div id="headerGroup" class="collection">
    <h1><?=$category->name?> BAGS</h1>
    <h2>ROYAL COLLECTION</h2>
</div>
<div id="sliderWrap">
    <div id="slider">
        <?php foreach ($category->products as $key=>$product) : ?>
            <div <?=($key==1)?'data-src="/images/'.$product->img.'"':''?> class="slide"><span class="overlay"><span class="text"><span class="header"><?=$product->name?></span><span class="button">LOOK</span></span></span><img src="/images/<?=$product->img?>" alt=""></div>
        <?php endforeach; ?>
    </div>
</div><img id="bg-img" src="/images/bg.jpg" alt="bg">