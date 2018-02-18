<?php

use yii\db\Migration;

/**
 * Handles the creation of table 'lessons'.
 */
class m180218_173720_create_lessons_table extends Migration {

    /**
     * 
     * 
     * CREATE TABLE 'lesson' (
      'id' int(11) NOT NULL AUTO_INCREMENT,
      'course_id' int(11) NOT NULL DEFAULT '1',
      'lesson' varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Название урока',
      'intro' text CHARACTER SET utf8 NOT NULL COMMENT 'Вступительный текст',
      'tasks' text CHARACTER SET utf8 NOT NULL COMMENT 'Домашнее задание по пунктам, каждый пункт на отдельной строке!',
      'video' varchar(99) CHARACTER SET utf8 NOT NULL COMMENT 'youtube код видео',
      'status' varchar(4) CHARACTER SET utf8 NOT NULL COMMENT 'show / hide',
      'step' int(11) NOT NULL DEFAULT '0' COMMENT 'Порядковый номер',
      'checking' varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT 'need' COMMENT 'need / skip',
      'video_length' time DEFAULT NULL,
      'copy_id' int(11) DEFAULT NULL,
      'demo' int(11) DEFAULT '0',
      'need_lesson_ids' varchar(255) COLLATE latin1_general_ci DEFAULT '',
      'tofill' varchar(8) COLLATE latin1_general_ci DEFAULT '',
      'packet' varchar(99) COLLATE latin1_general_ci DEFAULT NULL,
      'opencode' varchar(99) COLLATE latin1_general_ci DEFAULT '',
      PRIMARY KEY ('id'),
      KEY 'step' ('step')
      ) ENGINE=InnoDB AUTO_INCREMENT=1910 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
     * @inheritdoc
     */
    public function up() {
        $this->createTable('lessons', [
        'id' => $this->primaryKey(),
        'course_id' => $this->integer()->notNull()->defaultValue(1),
        'lesson' => $this->string()->notNull()->comment('Название урока'),
        'intro' => $this->string()->notNull()->comment('Вступительный текст'),
        'tasks'=>$this->string()->notNull()->comment('Домашнее задание по пунктам, каждый пункт на отдельной строке!'),
        'video'=>$this->string()->notNull()->comment('youtube код видео'),
        'status'=>$this->string()->notNull()->comment('show / hide'),
        'step' => $this->integer()->defaultValue(0)->comment('Порядковый номер'),
        'checking' =>$this->string()->notNull()->defaultValue('need')->comment('need / skip'), //varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT 'need' COMMENT 'need / skip',
        'video_length' => $this->time(),
        'copy_id' =>$this->integer(),
        'demo' =>$this->integer(),
        'need_lesson_ids'  =>$this->string(),
        'tofill'  =>$this->string(),
        'packet' =>$this->string(),
        'opencode'  =>$this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down() {
        $this->dropTable('lessons');
    }

}
