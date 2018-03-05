<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "access".
 *
 * @property integer $id
 * @property integer $pupil_id
 * @property integer $payment_id
 * @property string $packet
 * @property string $status
 * @property string $access_from
 * @property string $access_till
 * @property string $info
 * @property string $bonus_till
 */
class AccessRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'access';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pupil_id', 'packet', 'access_from', 'access_till', 'info'], 'required'],
            [['pupil_id', 'payment_id'], 'integer'],
            [['access_from', 'access_till', 'bonus_till'], 'safe'],
            [['info'], 'string'],
            [['packet'], 'string', 'max' => 20],
            [['status'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pupil_id' => 'Pupil ID',
            'payment_id' => 'Payment ID',
            'packet' => 'Packet',
            'status' => 'Status',
            'access_from' => 'Access From',
            'access_till' => 'Access Till',
            'info' => 'Info',
            'bonus_till' => 'Bonus Till',
        ];
    }
    
    public function getUser()
    {
        return $this->hasMany(UserRecord::className(),['id'=>'pupil_id']);
    }
     public function getCourse()
    {
        return $this->hasMany(CourseRecord::className(),['packet'=>'access']);
    }
    
    
}
