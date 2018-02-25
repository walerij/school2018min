<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\CourseRecord;

class ShopController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
  public function actionIndex($id=1)
    {
           $courses = CourseRecord::find()->all();
         //->where(['id'=>$session['__id']])
           if(isset($_GET['id']))
               $id=$_GET['id'];
        return $this->render('index',
                ['courses'=>$courses,
                    'active_id'=>$id]);
    }
     public function actionCourse()
    {
         $courses = CourseRecord::find()->all();
         //->where(['id'=>$session['__id']])
        return $this->render('index',
                ['courses'=>$courses]);
    }
    
      public function actionLesson()
    {
        return $this->render('index');
    }
}

