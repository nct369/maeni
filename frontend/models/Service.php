<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property integer $id
 * @property string $category_id
 * @property integer $owner
 * @property string $can_reserve
 * @property string $name
 * @property string $slug
 * @property string $phone
 * @property string $img
 * @property string $description
 * @property string $socials
 * @property string $status
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service';
    }
    
    public function behaviors()
    {
    	return [
    		'slug' => [
    			'class' => 'common\behaviors\Slug',
    			'in_attribute' => 'name',
    			'out_attribute' => 'slug',
    			'translit' => true
    		]
    	];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'owner', 'name', 'phone', 'description'], 'required'],
            [['owner'], 'integer'],
            [['can_reserve', 'description', 'socials', 'status'], 'string'],
            [['category_id', 'name', 'slug', 'img'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category id',
            'owner' => 'Owner',
            'can_reserve' => 'Can Reserve',
            'name' => 'Name',
            'slug' => 'Slug',
            'phone' => 'Phone',
            'img' => 'Img',
            'description' => 'Description',
            'socials' => 'Socials',
            'status' => 'Status',
        ];
    }
    
    public function getCategory()
    {
        return Category::find()->where(['id'=>$this->category_id])->one();
    }
}
