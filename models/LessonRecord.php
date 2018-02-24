<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lessons".
 *
 * @property integer $id
 * @property integer $course_id
 * @property string $lesson
 * @property string $intro
 * @property string $tasks
 * @property string $video
 * @property string $status
 * @property integer $step
 * @property string $checking
 * @property string $video_length
 * @property integer $copy_id
 * @property integer $demo
 * @property string $need_lesson_ids
 * @property string $tofill
 * @property string $packet
 * @property string $opencode
 */
class LessonRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lessons';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_id', 'step', 'copy_id', 'demo'], 'integer'],
            [['lesson', 'intro', 'tasks', 'video', 'status'], 'required'],
            [['video_length'], 'safe'],
            [['lesson', 'intro', 'tasks', 'video', 'status', 'checking', 'need_lesson_ids', 'tofill', 'packet', 'opencode'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_id' => 'Course ID',
            'lesson' => 'Lesson',
            'intro' => 'Intro',
            'tasks' => 'Tasks',
            'video' => 'Video',
            'status' => 'Status',
            'step' => 'Step',
            'checking' => 'Checking',
            'video_length' => 'Video Length',
            'copy_id' => 'Copy ID',
            'demo' => 'Demo',
            'need_lesson_ids' => 'Need Lesson Ids',
            'tofill' => 'Tofill',
            'packet' => 'Packet',
            'opencode' => 'Opencode',
        ];
    }
}
