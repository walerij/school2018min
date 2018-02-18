<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m180218_163554_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'pupil'=> $this->string(),
            'email'=> $this->string(),
            'password'=> $this->string(),
            'auth_key'=>$this->string(),
            'access_token'=>$this->string(),
            
            'status'=> $this->string(),
            'join_date'=> $this->dateTime(),
            'login_date'=> $this->dateTime()
            
                
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
