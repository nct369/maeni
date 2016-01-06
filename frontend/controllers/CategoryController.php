<?php

namespace frontend\controllers;
use frontend\models\Category;

class CategoryController extends \yii\web\Controller
{
    
    public function actionIndex($slug){
        $category = Category::find()->where(['slug'=>$slug])->one();
    	return $this->render('index',[
            'category'=>$category,
        ]);
    }
    
    // public function actionDatePickSearch($date)
    // {
    //   	if(Yii::$app->request->isAjax){
    //     	Yii::$app->session->set('date',date("d-m-Y", strtotime($date)));
    //     	$freeServices = Category::findOne(2)->freeServices($date);
        	
    //         $services = [];
    //         if($freeServices){
    //             foreach ($freeServices as $service) {
    //                 $services[$service->id] = array(
    //                         'id'            => $service->id,
    //                         'name'          => $service->name,
    //                         'slug'          => $service->slug,
    //                         'img'           => $service->img,
    //                         'description'   => $service->description,
    //                         'halls'         => array()
    //                     );
    //                 foreach ($service->freeHalls($date) as $halls) {
    //                     $services[$service->id]['halls'][] = array(
    //                             'id'    => $halls->id,
    //                             'name'  => $halls->name
    //                         );
    //                 }
    //             }
    //         }
    //         $html = $this->renderPartial('_html_palaces',['services'=>$services]);
    //         die(Json::encode(['html'=>$html]));
    //     }

    // }
    
}
