<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Əlaqə';
?>
<h2 class="header"><?=$this->title?></h2>
<div class="card-panel site-signup col l12">

    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

        <?= $form->field($model, 'name', ['options'=>['class'=>'input-field col s12 m12 l6']]) ?>

        <?= $form->field($model, 'email', ['options'=>['class'=>'input-field col s12 m12 l6']]) ?>

        <?= $form->field($model, 'subject', ['options'=>['class'=>'input-field col s12']]) ?>

        <?= $form->field($model, 'body', ['options'=>['class'=>'input-field col s12']])->textArea(['rows' => 6, 'class'=>'materialize-textarea']) ?>

        <div class="form-group">
            <?= Html::submitButton('Göndər', ['class' => 'waves-effect waves-light btn', 'name' => 'contact-button']) ?>
        </div>

    <?php ActiveForm::end(); ?>
    
</div>
