<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "productcart".
 *
 * @property int $cartId
 * @property int $userId
 * @property float $total
 * @property int $cartStatus
 * @property int $createdBy
 * @property string $createdAt
 *
 * @property Cartitems $cart
 */
class Productcart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productcart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'total', 'createdBy'], 'required'],
            [['userId', 'cartStatus', 'createdBy'], 'integer'],
            [['total'], 'number'],
            [['createdAt'], 'safe'],
            [['cartId'], 'exist', 'skipOnError' => true, 'targetClass' => Cartitems::className(), 'targetAttribute' => ['cartId' => 'cartItemsId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cartId' => 'Cart ID',
            'userId' => 'User ID',
            'total' => 'Total',
            'cartStatus' => 'Cart Status',
            'createdBy' => 'Created By',
            'createdAt' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Cart]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCart()
    {
        return $this->hasOne(Cartitems::className(), ['cartItemsId' => 'cartId']);
    }
}
