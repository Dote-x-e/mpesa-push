<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "orderitems".
 *
 * @property int $orderItemsId
 * @property int $orderId
 * @property int $productId
 *
 * @property Product $product
 * @property Order $order
 */
class Orderitems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orderitems';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orderId', 'productId'], 'required'],
            [['orderId', 'productId'], 'integer'],
            [['productId'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['productId' => 'productId']],
            [['orderId'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['orderId' => 'orderId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'orderItemsId' => 'Order Items ID',
            'orderId' => 'Order ID',
            'productId' => 'Product ID',
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['productId' => 'productId']);
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['orderId' => 'orderId']);
    }
}
