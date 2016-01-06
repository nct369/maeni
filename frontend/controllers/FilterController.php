<?php

namespace frontend\controllers;
use frontend\models\Service;

class FilterController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $services = Service::find()->where(['status'=>'1']);
        if($_GET['category']!=''){
            $services = $services->andWhere(['category_id' => $_GET['category']]);
        }
        return $this->render('index', [
            'services' => $services->all()
        ]);
    }

}
