<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Category;

$this->title = 'Şirkət qeydiyyatı';
?>
<h2 class="header"><?=$this->title?></h2>
<div class="card-panel site-signup col l12">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => '{input}{label}{error}',
                ],
            ]); ?>

                <?= $form->field($model, 'name', ['options'=>['class'=>'input-field col s12 m12 l6']]) ?>
                
                <?= $form->field($model, 'category_id', ['options'=>['class'=>'input-field col s12 m12 l6']])->dropDownList(
                    ArrayHelper::map(Category::find()->all(),'id','name'),
                    ['prompt'=>'Kateqoriyanı seçin']
                ) ?>

                <?= $form->field($model, 'email', ['options'=>['class'=>'input-field col s12 m12 l6']]) ?>

                <?= $form->field($model, 'phone', ['options'=>['class'=>'input-field col s12 m12 l6']]) ?>
                
                <?= $form->field($model, 'description', ['options'=>['class'=>'input-field col s12']])->textarea(['class'=>'materialize-textarea']) ?>

                <?= $form->field($model, 'password', ['options'=>['class'=>'input-field col s12 m12 l6']])->passwordInput() ?>

                <?= $form->field($model, 'confirmPassword', ['options'=>['class'=>'input-field col s12 m12 l6']])->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Göndər', ['class' => 'waves-effect waves-light btn']) ?>
                </div>

            <?php ActiveForm::end(); ?>

</div>