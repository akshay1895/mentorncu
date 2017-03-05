<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $student_id
 * @property string $fullname
 * @property integer $status
 * @property integer $class_id
 */
class student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fullname', 'class_id'], 'required'],
            [['status', 'class_id'], 'integer'],
            [['fullname'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'fullname' => 'Fullname',
            'status' => 'Status',
            'class_id' => 'Class ID',
        ];
    }
}
