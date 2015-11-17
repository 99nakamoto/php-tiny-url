<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tinyurl;

/**
 * TinyurlSearch represents the model behind the search form about `app\models\Tinyurl`.
 */
class TinyurlSearch extends Tinyurl
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['short', 'full', 'created_time', 'last_access'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Tinyurl::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'created_time' => $this->created_time,
            'last_access' => $this->last_access,
        ]);

        $query->andFilterWhere(['like', 'short', $this->short])
            ->andFilterWhere(['like', 'full', $this->full]);

        return $dataProvider;
    }
}
