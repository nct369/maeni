<?php
/**
 * Created by PhpStorm.
 * User: fuadi
 * Date: 14.06.2015
 * Time: 0:08
 */

namespace frontend\widgets\PlanWidget;
use frontend\models\Checklist;
use yii\base\Widget;
use Yii;
class PlanWidget extends Widget
{


    public $checklist;
    public $checklist_grouped;
    public function init()
    {
        $this->checklist = Checklist::find()->where(['user_id'=>Yii::$app->user->id])->all();
        $this->checklist_grouped = Checklist::find()->where(['user_id'=>Yii::$app->user->id])->groupBy(['category_id'])->all();
    }

    public function run()
    {
        return $this->render('plan',[
            'checklists'=>$this->checklist,
            'checklist_grouped'=>$this->checklist_grouped
        ]);
    }
}