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
    
    //получение пользователя для записи
    public function getUser()
    {
        return $this->hasOne(UserRecord::className(),['id'=>'pupil_id']);
    }
    
    //получение курсов для записи дотсупа
     public function getCourse()
    {
        return $this->hasMany(CourseRecord::className(),['access'=>'packet']);
    }
    
    //открытие доступа (статус=open)
    public function OpenAccess()
    {
        $this->status='open';
    }
    
    
     //закрытие доступа (статус=close)
    public function CloseAccess()
    {
        $this->status='clos';
    }
    
     //добавление доступа (статус=wait) - до одобрения запись в режиме ожидания
    public function AddAccess($access)
    {

     
        $this->pupil_id=$access->pupil_id;
        $this->payment_id=1;//$access->payment_id;
        $this->packet =$access->packet ;
        $this->access_from =$access->access_from;//date('Y-m-d');
        $this->access_till =$access->access_till;//date('Y-m-d');//$access->access_till ;
        $this->info =$access->info ;
        $this->bonus_till=$access->bonus_till;
        $this->status='wait';
    }
}
