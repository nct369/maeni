<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "reserve".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $service_slug
 * @property integer $hall_id
 * @property string $date
 * @property string $phone
 * @property string $comment
 * @property string $status
 */
class Reserve extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reserve';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'service_slug', 'hall_id', 'phone', 'comment', 'status'], 'required'],
            [['user_id', 'hall_id'], 'integer'],
            [['date'], 'safe'],
            [['comment', 'status'], 'string'],
            [['service_slug', 'phone'], 'string', 'max' => 100]
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
            'service_slug' => 'Service Slug',
            'hall_id' => 'Hall ID',
            'date' => 'Date',
            'phone' => 'Phone',
            'comment' => 'Comment',
            'status' => 'Status',
        ];
    }
    
    public function sendMail(){
        
    }
}
