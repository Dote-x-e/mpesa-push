<?php

namespace frontend\models;

use Yii;
use common\models\user;

/**
 * This is the model class for table "order".
 *
 * @property int $orderId
 * @property int $userId
 * @property float $total
 * @property int $orderStatus
 * @property int $deliveryId
 * @property string $createdAt
 * @property int $createBy
 *
 * @property User $createBy0
 * @property Delivery $delivery
 * @property User $user
 * @property Orderitems[] $orderitems
 * @property Payments[] $payments
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'total', 'deliveryId', 'createBy'], 'required'],
            [['userId', 'orderStatus', 'deliveryId', 'createBy'], 'integer'],
            [['total'], 'number'],
            [['createdAt'], 'safe'],
            [['createBy'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['createBy' => 'id']],
            [['deliveryId'], 'exist', 'skipOnError' => true, 'targetClass' => Delivery::className(), 'targetAttribute' => ['deliveryId' => 'deliveryId']],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'orderId' => 'Order ID',
            'userId' => 'User ID',
            'total' => 'Total',
            'orderStatus' => 'Order Status',
            'deliveryId' => 'Delivery ID',
            'createdAt' => 'Created At',
            'createBy' => 'Create By',
        ];
    }

    /**
     * Gets query for [[CreateBy0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreateBy0()
    {
        return $this->hasOne(User::className(), ['id' => 'createBy']);
    }

    /**
     * Gets query for [[Delivery]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDelivery()
    {
        return $this->hasOne(Delivery::className(), ['deliveryId' => 'deliveryId']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }

    /**
     * Gets query for [[Orderitems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderitems()
    {
        return $this->hasMany(Orderitems::className(), ['orderId' => 'orderId']);
    }

    /**
     * Gets query for [[Payments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payments::className(), ['orderId' => 'orderId']);
    }
}
