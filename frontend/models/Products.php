<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property integer $category_slug
 * @property string $name
 * @property string $img
 *
 * @property Category $category
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_slug', 'name', 'img'], 'required'],
            [['category_slug'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['img'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_slug' => 'Category Slug',
            'name' => 'Name',
            'img' => 'Img',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['slug' => 'category_slug']);
    }
}
