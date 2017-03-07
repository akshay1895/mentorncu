<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "answer".
 *
 * @property integer $answer_id
 * @property integer $status
 */
class answer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'answer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'answer_id' => 'Answer ID',
            'status' => 'Status',
        ];
    }
}
