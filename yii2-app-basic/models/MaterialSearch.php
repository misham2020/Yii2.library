<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Material;

/**
 * MaterialSearch represents the model behind the search form of `app\models\Material`.
 */
class MaterialSearch extends Material
{
    public $searchstring;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['searchstring'], 'safe'],
            [['id', 'category_id', 'type_id'], 'integer'],
            [['name', 'author', 'description'], 'safe'],
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
        $query = Material::find();

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
         $query->orFilterWhere([
            'id' => $this->id,
            'category_id' => $this->category_id,
            'type_id' => $this->type_id,
            'name' => $this->name,
            'auther' => $this->author,
            'description' => $this->description,
        ]); 

        $query->orFilterWhere(['like', 'name', $this->searchstring])
             ->orFilterWhere(['like', 'author', $this->searchstring])
            ->orFilterWhere(['like', 'description', $this->searchstring])
            ->orFilterWhere(['like', 'category_id', $this->searchstring])
            ->orFilterWhere(['like', 'type_id', $this->searchstring])
            ->orFilterWhere(['like', 'id', $this->searchstring]);

        return $dataProvider;
    }
}
