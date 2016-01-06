<?php
use yii\helpers\VarDumper;
$this->title = $category->name;
// VarDumper::dump($category->services,6,1);
?>
<h2 class="header"><?=$this->title?></h2>
<div class="category-index-page">
    <?php foreach($category->services as $service) : ?>
        <div class="col s12 m6 l3">
            <div class="ih-item circle effect3 left_to_right">
                <div class="ih-item-hover">
                    <div data-url="#" class="img z-depth-1">
                        <a class="valign-wrapper">
                            <img src="/uploads/services/<?=$service->img?>" alt="img">
                            <h4 class="valign"><?=$service->name?></h4>
                        </a>
                    </div>
                    <div class="info z-depth-1 valign-wrapper">
                        <div class="info-description valign">
                            <h4><?=$service->name?></h4>
                            <ul class="product_rating">
                              <li><i class="zmdi zmdi-calendar"></i> 14</li>
                              <li><i class="zmdi zmdi-star-outline"></i> 23</li>
                              <li><i class="zmdi zmdi-favorite-outline"></i> 34</li>
                            </ul>
                        </div>
                    </div>
                    <div class="buttons">
                        <a class="add_btn btn-floating btn-large waves-effect waves-light" data-name="<?=$service->name?>" data-id="<?=$service->id?>" data-category="<?=$service->category->slug?>"><i class="zmdi zmdi-hc-3x zmdi-plus"></i></a>
                        <a href="/<?=$service->category->slug?>/<?=$service->slug?>" class="view_btn btn-floating btn-large waves-effect waves-light"><i class="zmdi zmdi-hc-3x zmdi-search"></i></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>