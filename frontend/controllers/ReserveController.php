<?php

namespace frontend\controllers;
use frontend\models\Reserve;


class ReserveController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionAddReserve()
    {
       	if(Yii::$app->request->isAjax){
        	$reserve = new Reserve();
        	$reserve->user_id = Yii::$app->user->id;
        	$reserve->service_id = $id;
        	$reserve->phone = $phone;
        	$reserve->description = $description;
        	$reserve->save();
        	
            die(Json::encode(['html'=>$html]));
        }

    }

}
