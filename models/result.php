<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "result".
 *
 * @property integer $question_id
 * @property integer $result
 */
class result extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'result';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question_id', 'result'], 'required'],
            [['question_id', 'result'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'question_id' => 'Question ID',
            'result' => 'Result',
        ];
    }
}
