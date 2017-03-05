<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "question".
 *
 * @property integer $question_id
 * @property integer $class_id
 * @property string $question
 * @property string $description
 * @property string $start_date
 * @property string $end_date
 * @property integer $active
 */
class question extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'question', 'description'], 'required'],
            [['class_id', 'active'], 'integer'],
            [['description'], 'string'],
            [['start_date', 'end_date'], 'safe'],
            [['question'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'question_id' => 'Question ID',
            'class_id' => 'Class ID',
            'question' => 'Question',
            'description' => 'Description',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'active' => 'Active',
        ];
    }
}
