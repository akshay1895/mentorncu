<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mentor".
 *
 * @property integer $mentor_id
 * @property string $fullname
 * @property string $email_id
 */
class mentor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mentor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fullname', 'email_id'], 'required'],
            [['fullname', 'email_id'], 'string', 'max' => 80],
            [['email_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mentor_id' => 'Mentor ID',
            'fullname' => 'Fullname',
            'email_id' => 'Email ID',
        ];
    }
}
