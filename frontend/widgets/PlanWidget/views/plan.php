<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<ul id="side-plan" class="side-nav fixed">
 <li class="toolbar_item">
  <a href="#" data-view="information">
   <i class="zmdi zmdi-hc-3x zmdi-account-calendar"></i>
   <span>İnformasiya</span>
  </a>
 </li>
 <li class="toolbar_item">
  <a href="#" class="disabled" data-view="calendar">
   <i class="zmdi zmdi-hc-3x zmdi-calendar"></i>
   <span>Təqvim</span>
  </a>
 </li>
 <?php foreach($checklist_grouped as $checklist_group): ?>
 <li class="toolbar_item">
  <a href="#" class="disabled" data-view="<?=$checklist_group->category->slug?>" class="checklist-category">
   <i class="zmdi zmdi-hc-3x <?=$checklist_group->category->icon?>"></i>
   <span><?=$checklist_group->category->name?></span>
  </a>
 </li>
 <?php endforeach; ?>
 <li class="toolbar_item">
  <a class="waves-effect waves-black btn white disabled" data-view="order">sifariş</a>
 </li>
</ul>

<!--INFORMATION-->
<div id="information" class="plan-content-view">
    <div class="plan-content-header">
        <div class="plan-content-input" data-placeholder="Məlumat">Məlumat</div>
        <a class="waves-effect waves-black btn right enter"><i class="zmdi zmdi-check zmdi-hc-2x"></i></a>
        <a class="waves-effect waves-black btn left close"><i class="zmdi zmdi-close zmdi-hc-2x"></i></a>
    </div>
    <div class="row">
        <div class="plan-content-view-body">
                <div class="card-panel col l8 offset-l2 m12 offset-m0">
                    <div class="row">
                        <form action="post">
                            <div class="input-field col s12 m12 l6">
                                <i class="prefix zmdi zmdi-hc-2x zmdi-account"></i>
                                <input id="plan_fullname" type="text" value="<?=(Yii::$app->user->identity->username)?Yii::$app->user->identity->username:''?>" data-value="<?=(Yii::$app->user->identity->username)?Yii::$app->user->identity->username:''?>">
                                <label for="plan_fullname">Şəxs</label>
                            </div>
                            <div class="input-field col s12 m12 l6">
                                <i class="prefix zmdi zmdi-hc-2x zmdi-email"></i>
                                <input id="plan_email" type="text" value="<?=(Yii::$app->user->identity->email)?Yii::$app->user->identity->email:''?>" data-value="<?=(Yii::$app->user->identity->email)?Yii::$app->user->identity->email:''?>">
                                <label for="plan_email">Email</label>
                            </div>
                            <div class="input-field col s12 m12 l6">
                                <i class="prefix zmdi zmdi-hc-2x zmdi-smartphone"></i>
                                <input id="plan_telephone" type="tel" value="<?=(Yii::$app->user->identity->phone)?Yii::$app->user->identity->phone:''?>" data-value="<?=(Yii::$app->user->identity->phone)?Yii::$app->user->identity->phone:''?>">
                                <label for="plan_telephone">Telefon</label>
                            </div>
                            <div class="input-field col s12 m12 l6">
                                <i class="prefix zmdi zmdi-hc-2x zmdi-phone"></i>
                                <input id="plan_other_telephone" type="tel" data-value="" class="validate">
                                <label for="plan_other_telephone">Əlavə nömrə</label>
                            </div>
                            <div class="input-field col s12 m12 l12">
                                <i class="prefix zmdi zmdi-hc-2x zmdi-edit"></i>
                                <textarea id="plan_description" data-value="" class="materialize-textarea"></textarea>
                                <label for="plan_description">Əlavə məlumat</label>
                            </div>
                            <input id="plan-input-calendar" type="text" data-value="" name="plan-input-calendar" style="display: none"/>
                            <?php foreach($checklist_grouped as $checklist_group): ?>
                                <input id="plan-input-<?=$checklist_group->category->slug?>" class="plan-input-service" type="text" data-value="" name="plan-input-<?=$checklist_group->category->slug?>" style="display: none"/>
                            <?php endforeach; ?>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>

<!--CALENDAR-->
<div id="calendar" class="plan-content-view">
    <div class="plan-content-header">
        <div class="plan-content-input" data-placeholder="Təqvim">Təqvim</div>
        <a class="waves-effect waves-black btn right enter"><i class="zmdi zmdi-check zmdi-hc-2x"></i></a>
        <a class="waves-effect waves-black btn left close"><i class="zmdi zmdi-close zmdi-hc-2x"></i></a>
    </div>
    <div class="row">
        <div class="plan-content-view-body">
            <div id="datepicker"></div>
        </div>
    </div>
</div>

<!--CATEGORIES-->
<?php foreach($checklist_grouped as $checklist_group): ?>
    <div id="<?=$checklist_group->category->slug?>" class="plan-content-view plan-content-service">
        <div class="plan-content-header">
            <div class="plan-content-input" data-placeholder="<?=$checklist_group->category->name?>"><?=$checklist_group->category->name?></div>
            <a class="waves-effect waves-black btn right enter"><i class="zmdi zmdi-check zmdi-hc-2x"></i></a>
            <a class="waves-effect waves-black btn left close"><i class="zmdi zmdi-close zmdi-hc-2x"></i></a>
        </div>
        <div class="row">
            <div class="plan-content-view-body">
                <div class="plan-services-page">
                <?php foreach($checklists as $checklist): ?>
                    <?php if($checklist_group->category_id == $checklist->category_id):?>
                    
                        <div class="col s12 m6 l3">
                            <div class="ih-item circle effect3 left_to_right">
                                <div class="ih-item-hover">
                                    <div data-url="#" class="img z-depth-1">
                                        <a class="valign-wrapper">
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
                                        <a class="add_btn btn-floating btn-large waves-effect waves-light" tabindex="0" data-input="plan-input-<?=$checklist_group->category->slug?>" data-id="<?=$checklist->service->id?>" data-category="<?=$checklist->category->slug?>"><i class="zmdi zmdi-hc-3x zmdi-check"></i></a>
                                        <a class="view_btn btn-floating btn-large waves-effect waves-light" tabindex="0"><i class="zmdi zmdi-hc-3x zmdi-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <?php endif;?>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!--ORDER-->
<div id="order" class="plan-content-view">
    <div class="plan-content-header">
        <div class="plan-content-input">Sifariş</div>
        <a class="waves-effect waves-black btn right enter"><i class="zmdi zmdi-check zmdi-hc-2x"></i></a>
        <a class="waves-effect waves-black btn left close"><i class="zmdi zmdi-close zmdi-hc-2x"></i></a>
    </div>
    <div class="row">
        <div class="plan-content-view-body">
            <div class="card-panel col l8 offset-l2 m12 offset-m0 s12 offset-s0">
                <p>Şəxs: <span data-id="plan_fullname"></span></p>
                <p>Email: <span data-id="plan_email"></span>
                <p>Telefon: <span data-id="plan_telephone"></span>
                <p>Digər telefon: <span data-id="plan_other_telephone"></span>
                <p>Əlavə Məlumat: <span data-id="plan_description"></span>
                <p>Təqvim: <span data-id="plan-input-calendar"></span>
                <?php foreach($checklist_grouped as $checklist_group): ?>
                    <p><?=$checklist_group->category->name?>: <span class="plan_category_span" data-id="plan-input-<?=$checklist_group->category->slug?>"></span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!--ORDERED-->
<div id="ordered" class="plan-content-view">
    <div class="plan-content-header">
        <div class="plan-content-input">Sifariş</div>
        <a class="waves-effect waves-black btn right enter"><i class="zmdi zmdi-check zmdi-hc-2x"></i></a>
        <a class="waves-effect waves-black btn left close"><i class="zmdi zmdi-close zmdi-hc-2x"></i></a>
    </div>
    <div class="row">
        <div class="plan-content-view-body">
            <div class="card-panel col l8 offset-l2 m12 offset-m0 s12 offset-s0 center">
                <p>Təbriklər! Sizin sifarişiniz qəbul olundu, seçdiyiniz xidmət tərəfindən sizinlə əlaqə saxlanılacaq.</p>
            </div>
        </div>
    </div>
</div>