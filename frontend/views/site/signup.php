<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Qeydiyyat';
?>
<h2 class="header"><?=$this->title?></h2>
<div class="card-panel site-signup col l12">


        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
    
            <?= $form->field($model, 'lastname', ['options'=>['class'=>'input-field col s12 m12 l6']]) ?>
            
            <?= $form->field($model, 'firstname', ['options'=>['class'=>'input-field col s12 m12 l6']]) ?>
    
            <?= $form->field($model, 'email', ['options'=>['class'=>'input-field col s12 m12 l6']]) ?>
    
            <?= $form->field($model, 'phone', ['options'=>['class'=>'input-field col s12 m12 l6']]) ?>
    
            <?= $form->field($model, 'password', ['options'=>['class'=>'input-field col s12 m12 l6']])->passwordInput() ?>
    
            <?= $form->field($model, 'confirmPassword', ['options'=>['class'=>'input-field col s12 m12 l6']])->passwordInput() ?>
    
            <div class="form-group col s12">
                <?= Html::submitButton('Göndər', ['class' => 'waves-effect waves-light btn', 'name' => 'signup-button']) ?>
            </div>
    
        <?php ActiveForm::end(); ?>

    
</div>
