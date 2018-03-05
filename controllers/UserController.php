<?php

namespace app\controllers;

use Yii;
use app\models\CourseRecord;
use app\models\UserRecord;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdminCourseController implements the CRUD actions for CourseRecord model.
 */
class UserController extends Controller
{
    public function actionIndex()
    {
        
        
        return $this->render('index');
    }
    
    
}
