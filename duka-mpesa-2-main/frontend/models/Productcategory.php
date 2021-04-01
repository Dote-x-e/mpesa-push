<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "productcategory".
 *
 * @property int $categoryId
 * @property int $productId
 */
class Productcategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productcategory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['productId'], 'required'],
            [['productId'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'categoryId' => 'Category ID',
            'productId' => 'Product ID',
        ];
    }
}
