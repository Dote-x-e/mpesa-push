<?php

namespace frontend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "payments".
 *
 * @property int $paymentId
 * @property int $orderId
 * @property float $amount
 * @property int $userId
 * @property int $paymentMethodId
 * @property int $status
 * @property string $createdAt
 * @property int $createdBy
 *
 * @property Order $order
 * @property User $user
 * @property Paymentmethods $paymentMethod
 * @property User $createdBy0
 */
class Payments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orderId', 'amount', 'userId', 'paymentMethodId', 'createdBy'], 'required'],
            [['orderId', 'userId', 'paymentMethodId', 'status', 'createdBy'], 'integer'],
            [['amount'], 'number'],
            [['createdAt'], 'safe'],
            [['orderId'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['orderId' => 'orderId']],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
            [['paymentMethodId'], 'exist', 'skipOnError' => true, 'targetClass' => Paymentmethods::className(), 'targetAttribute' => ['paymentMethodId' => 'paymentMethodId']],
            [['createdBy'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['createdBy' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'paymentId' => 'Payment ID',
            'orderId' => 'Order ID',
            'amount' => 'Amount',
            'userId' => 'User ID',
            'paymentMethodId' => 'Payment Method ID',
            'status' => 'Status',
            'createdAt' => 'Created At',
            'createdBy' => 'Created By',
        ];
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
     * Gets query for [[PaymentMethod]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentMethod()
    {
        return $this->hasOne(Paymentmethods::className(), ['paymentMethodId' => 'paymentMethodId']);
    }

    /**
     * Gets query for [[CreatedBy0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy0()
    {
        return $this->hasOne(User::className(), ['id' => 'createdBy']);
    }
}
