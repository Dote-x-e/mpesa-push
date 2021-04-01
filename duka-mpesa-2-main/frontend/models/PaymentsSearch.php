<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Payments;

/**
 * PaymentsSearch represents the model behind the search form of `frontend\models\Payments`.
 */
class PaymentsSearch extends Payments
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['paymentId', 'orderId', 'userId', 'paymentMethodId', 'status', 'createdBy'], 'integer'],
            [['amount'], 'number'],
            [['createdAt'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Payments::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'paymentId' => $this->paymentId,
            'orderId' => $this->orderId,
            'amount' => $this->amount,
            'userId' => $this->userId,
            'paymentMethodId' => $this->paymentMethodId,
            'status' => $this->status,
            'createdAt' => $this->createdAt,
            'createdBy' => $this->createdBy,
        ]);

        return $dataProvider;
    }
}
