<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
$this->title = 'Contacts';
?>
<div id="headerGroup">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="separator"></div>
</div>
<div id="wrapper">

    <p style="text-align:center">
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
    </p><br/><br/>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>              
                
                <div class="form-group field-contactform-name required" style="width:47%;">
                    <input type="text" id="contactform-name" class="form-control" name="ContactForm[name]" placeholder="Name" required>
                     <?= Html::error($model, 'name') ?>
                </div>
                <div class="form-group field-contactform-email required" style="width:47%; float: right">
                    <input type="text" id="contactform-email" class="form-control" name="ContactForm[email]" placeholder="Email" required>
                    <?= Html::error($model, 'email') ?>
                </div>
                <div class="clear"></div>
                
                <div class="form-group field-contactform-subject required">
                    <input type="text" id="contactform-subject" class="form-control" name="ContactForm[subject]" placeholder="Subject" required>
                    <?= Html::error($model, 'subject') ?>
                </div>
                
                <div class="form-group field-contactform-body required">
                    <textarea id="contactform-body" class="form-control" name="ContactForm[body]" rows="6" placeholder="Body" required></textarea>
                    <?= Html::error($model, 'body') ?>
                </div>                
                <div class="clear"></div>
                
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div><img id="bg-img" src="/images/bg.jpg" alt="bg">