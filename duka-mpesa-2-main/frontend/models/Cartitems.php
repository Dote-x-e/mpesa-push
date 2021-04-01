<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cartitems".
 *
 * @property int $cartItemsId
 * @property int $cartId
 * @property int $productId
 *
 * @property Product $product
 * @property Cartitems $cart
 * @property Cartitems[] $cartitems
 * @property Productcart $productcart
 */
class Cartitems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cartitems';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cartId', 'productId'], 'required'],
            [['cartId', 'productId'], 'integer'],
            [['productId'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['productId' => 'productId']],
            [['cartId'], 'exist', 'skipOnError' => true, 'targetClass' => Cartitems::className(), 'targetAttribute' => ['cartId' => 'cartItemsId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cartItemsId' => 'Cart Items ID',
            'cartId' => 'Cart ID',
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
     * Gets query for [[Cart]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCart()
    {
        return $this->hasOne(Cartitems::className(), ['cartItemsId' => 'cartId']);
    }

    /**
     * Gets query for [[Cartitems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCartitems()
    {
        return $this->hasMany(Cartitems::className(), ['cartId' => 'cartItemsId']);
    }

    /**
     * Gets query for [[Productcart]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductcart()
    {
        return $this->hasOne(Productcart::className(), ['cartId' => 'cartItemsId']);
    }
}
