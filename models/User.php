<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $user_id
 * @property string $password
 * @property string $fullname
 * @property string $email_id
 * @property integer $role
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'password', 'fullname', 'email_id'], 'required'],
            [['role'], 'integer'],
            [['user_id', 'password'], 'string', 'max' => 20],
            [['fullname', 'email_id'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'password' => 'Password',
            'fullname' => 'Fullname',
            'email_id' => 'Email ID',
            'role' => 'Role',
        ];
    }
}
