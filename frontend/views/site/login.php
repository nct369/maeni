<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Daxil ol';
?>
<h2 class="header"><?=$this->title?></h2>
<div class="site-login card-panel col m12 l6 offset-l3">

            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'email', ['options'=>['class'=>'input-field col s12']]) ?>

                <?= $form->field($model, 'password', ['options'=>['class'=>'input-field col s12']])->passwordInput() ?>

                <p class="center-align">
                  <input type="checkbox" class="filled-in" name="LoginForm[rememberMe]" id="loginform-rememberme" />
                  <?=Html::activeLabel($model,'rememberMe')?>
                </p>

                <!--<div style="color:#999;margin:1em 0">-->
                <!--    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.-->
                <!--</div>-->

                <div class="form-group col s12">
                    <?= Html::submitButton('Login', ['class' => 'waves-effect waves-light btn', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            
</div>
