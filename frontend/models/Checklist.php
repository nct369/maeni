<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "checklist".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $service_id
 * @property integer $category_id
 */
class Checklist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'checklist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'service_id', 'category_id'], 'required'],
            [['user_id', 'service_id', 'category_id'], 'integer'],
            [['user_id', 'service_id'], 'unique', 'targetAttribute' => ['user_id', 'service_id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'service_id' => 'Service ID',
            'category_id' => 'Category ID',
        ];
    }
    
    // public function getUserCategories()
    // {
    //     return $this::find()->where(['user_id'=>Yii::$app->user->id])->groupBy(['category_id'])->categories();
    // }
    
    public function getCategory()
    {
        return Category::find()->where(['id'=>$this->category_id])->one();
    }
    
    public function getService()
    {
        return Service::find()->where(['id'=>$this->service_id])->one();
    }
}
