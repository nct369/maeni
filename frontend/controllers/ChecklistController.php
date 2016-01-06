<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\Json;
use frontend\models\Checklist;
use frontend\models\Service;

class ChecklistController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $checklist = Checklist::find()->where(['user_id'=>Yii::$app->user->id])->all();
        return $this->render('index',['checklist'=>$checklist]);
    }

    public function actionChecklistCat($cat)
    {
       	if(Yii::$app->request->isAjax){
        	$checklist = Checklist::find()->where(['user_id'=>Yii::$app->user->id, 'category_id'=>$_GET['cat']])->all();
            $html = $this->renderPartial('_html_services',['checklist'=>$checklist]);
            die(Json::encode(['html'=>$html]));
        }

    }
    
    public function actionCheckService($id)
    {
       	if(Yii::$app->request->isAjax){
       	    if(Yii::$app->user->isGuest){
       	        return $this->redirect(array('site/login','id'=>302));
       	    
       	    }
       	    $service = Service::find()->where(['id'=>$id])->one();
       	    $checklist = new Checklist();
       	    $checklist->user_id = Yii::$app->user->id;
       	    $checklist->category_id = $service->category_id;
       	    $checklist->service_id = $service->id;
       	    if($checklist->save()){
           	    $list = '<li class="toolbar_item"><a href="#" class="disabled" data-view="'.$service->category->slug.'" class="checklist-category"><i class="zmdi zmdi-hc-3x '.$service->category->icon.'"></i><span>'.$service->category->name.'</span></a></li>';
           	    $category_input = '<input id="plan-input-'.$service->category->slug.'" class="plan-input-service" type="text" data-value="" name="plan-input-'.$service->category->slug.'" style="display: none"/>';
           	    $category_p = '<p>'.$service->category->name.': <span class="plan_category_span" data-id="plan-input-'.$service->category->slug.'"></span>';
           	    $category_block = '<div id="'.$service->category->slug.'" class="plan-content-view plan-content-service">
                                        <div class="plan-content-header">
                                            <div class="plan-content-input" data-placeholder="'.$service->category->name.'">'.$service->category->name.'</div>
                                            <a class="waves-effect waves-black btn right enter"><i class="zmdi zmdi-check zmdi-hc-2x"></i></a>
                                            <a class="waves-effect waves-black btn left close"><i class="zmdi zmdi-close zmdi-hc-2x"></i></a>
                                        </div>
                                        <div class="row">
                                            <div class="plan-content-view-body">
                                                <div class="plan-services-page">
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                $service =  '<div class="col s12 m6 l3">
                                <div class="ih-item circle effect3 left_to_right">
                                    <div class="ih-item-hover">
                                        <div data-url="#" class="img z-depth-1">
                                            <a class="valign-wrapper">
                                                <img src="/uploads/services/'.$service->img.'" alt="img">
                                                <h4 class="valign">'.$service->name.'</h4>
                                            </a>
                                        </div>
                                        <div class="info z-depth-1 valign-wrapper">
                                            <div class="info-description valign">
                                                <h4>'.$service->name.'</h4>
                                                <ul class="product_rating">
                                                  <li><i class="zmdi zmdi-calendar"></i> 14</li>
                                                  <li><i class="zmdi zmdi-star-outline"></i> 23</li>
                                                  <li><i class="zmdi zmdi-favorite-outline"></i> 34</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <a class="add_btn btn-floating btn-large waves-effect waves-light" tabindex="0" data-input="plan-input-'.$service->category->slug.'" data-id="'.$service->id.'" data-category="'.$service->category->slug.'"><i class="zmdi zmdi-hc-3x zmdi-check"></i></a>
                                            <a class="view_btn btn-floating btn-large waves-effect waves-light" tabindex="0"><i class="zmdi zmdi-hc-3x zmdi-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
           	    $check = true;
   	        }else{
       	        $check = false;
   	        }
   	    die(Json::encode([
   	        'list' => $list,
   	        'category_input' => $category_input,
   	        'category_p' => $category_p,
   	        'category_block' => $category_block,
   	        'service' => $service,
   	        'check' => $check
   	        ]));
        }

    }
    
    public function actionUncheckService($id)
    {
       	if(Yii::$app->request->isAjax){
       	    $checklist = Checklist::find()->where(['user_id'=>Yii::$app->user->id, 'service_id'=>$id])->one();
       	    if($checklist->delete()){
       	        $uncheck = true;
       	    }else{
       	        $uncheck = false;
       	    }
   	    die(Json::encode([
   	        'uncheck' => $uncheck
   	        ]));
        }

    }

}
