<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property integer $id
 * @property string $course
 * @property string $courl
 * @property string $info
 * @property string $access
 * @property integer $author_id
 * @property integer $lessons
 * @property string $techno
 * @property integer $tier
 * @property integer $step
 * @property integer $stat_reports
 * @property integer $stat_videos
 * @property double $stat_stars
 * @property integer $stat_lessons
 * @property string $stat_duration
 * @property integer $is_active
 */
class CourseRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author_id', 'lessons', 'tier', 'step', 'stat_reports', 'stat_videos', 'stat_lessons', 'is_active'], 'integer'],
            [['stat_stars'], 'number'],
            [['stat_duration'], 'safe'],
            [['course', 'courl', 'info', 'access', 'techno'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course' => 'Course',
            'courl' => 'Courl',
            'info' => 'Info',
            'access' => 'Access',
            'author_id' => 'Author ID',
            'lessons' => 'Lessons',
            'techno' => 'Techno',
            'tier' => 'Tier',
            'step' => 'Step',
            'stat_reports' => 'Stat Reports',
            'stat_videos' => 'Stat Videos',
            'stat_stars' => 'Stat Stars',
            'stat_lessons' => 'Stat Lessons',
            'stat_duration' => 'Stat Duration',
            'is_active' => 'Is Active',
        ];
        
        
    }
    public function getLesson()
    {
        return $this->hasMany(LessonRecord::className(),['course_id'=>'id']);
    }
}
