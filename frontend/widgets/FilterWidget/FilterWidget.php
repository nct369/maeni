<?php
/**
 * Created by PhpStorm.
 * User: fuadi
 * Date: 14.06.2015
 * Time: 0:08
 */

namespace frontend\widgets\FilterWidget;
use frontend\models\Category;
use yii\base\Widget;
use Yii;
class FilterWidget extends Widget
{

    public $filter;
    public function init()
    {
        $this->filter = Category::find()->all();
    }

    public function run()
    {
        return $this->render('filter',[
            'filter'=>$this->filter,
        ]);
    }
}