<?php

namespace app\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\classroom;

/**
 * ClassroomSearch represents the model behind the search form about `app\models\classroom`.
 */
class ClassroomSearch extends classroom
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'mentor_id', 'stream', 'year', 'section'], 'integer'],
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
        $query = classroom::find();

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
            'class_id' => $this->class_id,
            'mentor_id' => $this->mentor_id,
            'stream' => $this->stream,
            'year' => $this->year,
            'section' => $this->section,
        ]);

        return $dataProvider;
    }
}
