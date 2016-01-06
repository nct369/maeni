<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
 ?>

<?php foreach($checklist as $checklist):?>
    <div class="col m6 l3">
        <div class="ih-item circle effect3 left_to_right">
            <div class="ih-item-hover">
                <div data-url="#" class="img z-depth-1">
                    <a href="#" class="valign-wrapper">
                        <img src="/uploads/services/<?=$checklist->service->img?>" alt="img">
                        <h4 class="valign"><?=$checklist->service->name?></h4>
                    </a>
                </div>
                <div class="info z-depth-1 valign-wrapper">
                    <div class="info-description valign">
                        <h4><?=$checklist->service->name?></h4>
                        <ul class="product_rating">
                          <li><i class="zmdi zmdi-calendar"></i> 14</li>
                          <li><i class="zmdi zmdi-star-outline"></i> 23</li>
                          <li><i class="zmdi zmdi-favorite-outline"></i> 34</li>
                        </ul>
                    </div>
                </div>
                <div class="buttons">
                    <a class="add_btn btn-floating btn-large waves-effect waves-light" tabindex="0"><i class="zmdi zmdi-hc-3x zmdi-plus"></i></a>
                    <a class="view_btn btn-floating btn-large waves-effect waves-light" tabindex="0"><i class="zmdi zmdi-hc-3x zmdi-search"></i></a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>