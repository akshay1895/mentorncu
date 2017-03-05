<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "question_answer".
 *
 * @property integer $student_id
 * @property integer $question_id
 * @property integer $answer_id
 */
class question_answer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'question_answer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'question_id', 'answer_id'], 'required'],
            [['student_id', 'question_id', 'answer_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'question_id' => 'Question ID',
            'answer_id' => 'Answer ID',
        ];
    }
}
