<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "classroom".
 *
 * @property integer $class_id
 * @property integer $mentor_id
 * @property integer $stream
 * @property integer $year
 * @property integer $section
 */
class classroom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'classroom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mentor_id'], 'required'],
            [['mentor_id', 'stream', 'year', 'section'], 'integer'],
            [['mentor_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'class_id' => 'Class ID',
            'mentor_id' => 'Mentor ID',
            'stream' => 'Stream',
            'year' => 'Year',
            'section' => 'Section',
        ];
    }
}
