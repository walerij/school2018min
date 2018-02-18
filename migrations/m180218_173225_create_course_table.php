<?php

use yii\db\Migration;

/**
 * Handles the creation of table 'course'.
 */
class m180218_173225_create_course_table extends Migration {
    /*

     * CREATE TABLE 'course' (
      'id' int(11) NOT NULL AUTO_INCREMENT,
      'course' varchar(255) DEFAULT NULL,
      'courl' varchar(99) DEFAULT NULL,
      'info' varchar(255) NOT NULL,
      'access' varchar(32) DEFAULT NULL,
      'author_id' int(11) DEFAULT '1',
      'lessons' int(11) DEFAULT '0',
      'techno' varchar(50) DEFAULT NULL,
      'tier' int(11) DEFAULT '0',
      'step' int(11) DEFAULT '0',
      'stat_reports' int(11) DEFAULT '0',
      'stat_videos' int(11) DEFAULT '0',
      'stat_stars' decimal(3,2) DEFAULT '0.00',
      'stat_lessons' int(11) DEFAULT '0',
      'stat_duration' time DEFAULT '00:00:00',
      'is_active' int(11) DEFAULT '0',
      PRIMARY KEY ('id')
      ) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8;
     *      */

    /**
     * @inheritdoc
     */
    public function up() {
        $this->createTable('course', [
            'id' => $this->primaryKey(),
            'course' => $this->string(),
            'courl' => $this->string(),
            'info' => $this->string(),
            'access' => $this->string(),
            'author_id' => $this->integer(),
            'lessons' => $this->integer(),
            'techno' => $this->string(),
            'tier' => $this->integer(),
            'step' => $this->integer(),
            'stat_reports' => $this->integer(),
            'stat_videos' => $this->integer(),
            'stat_stars' => $this->double(),
            'stat_lessons' => $this->integer(),
            'stat_duration' => $this->time(),
            'is_active' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down() {
        $this->dropTable('course');
    }

}
