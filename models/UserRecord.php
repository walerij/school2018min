<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $pupil
 * @property string $email
 * @property string $password
 * @property string $auth_key
 * @property string $access_token
 * @property string $status
 * @property string $join_date
 * @property string $login_date
 */
class UserRecord extends \yii\db\ActiveRecord
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
            [['join_date', 'login_date'], 'safe'],
            [['pupil', 'email', 'password', 'auth_key', 'access_token', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pupil' => 'Pupil',
            'email' => 'Email',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
            'status' => 'Status',
            'join_date' => 'Join Date',
            'login_date' => 'Login Date',
        ];
    }
}
