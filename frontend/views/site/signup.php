
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
?>
<div id="headerGroup">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="separator"></div>
</div>
<div id="wrapper">
    <div class="site-signup">
    
        <p>Please fill out the following fields to signup:</p>
    
        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
    
                    <?= $form->field($model, 'username') ?>
    
                    <?= $form->field($model, 'email') ?>
    
                    <?= $form->field($model, 'password')->passwordInput() ?>
    
                    <div class="form-group">
                        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>
    
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
