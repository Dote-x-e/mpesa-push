<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "delivery".
 *
 * @property int $deliveryId
 * @property string $deliveryDesc
 * @property float $cost
 *
 * @property Order[] $orders
 */
class Delivery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'delivery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['deliveryDesc', 'cost'], 'required'],
            [['cost'], 'number'],
            [['deliveryDesc'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'deliveryId' => 'Delivery ID',
            'deliveryDesc' => 'Delivery Desc',
            'cost' => 'Cost',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['deliveryId' => 'deliveryId']);
    }
}
