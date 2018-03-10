<?php

namespace app\controllers;

use Yii;
use app\models\CourseRecord;
use app\models\UserRecord;
use app\models\AccessRecord;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdminCourseController implements the CRUD actions for CourseRecord model.
 */
class UserController extends Controller {

    public function actionIndex() {
        $session = Yii::$app->session;
        $access = AccessRecord::find()->where(['pupil_id' => $session['__id']])->all();


        return $this->render('index', ['access_user' => $access]);
    }

    public function actionAddCourse() {
        $new_access = new AccessRecord();

        if ($new_access->load(Yii::$app->request->post())) {
            /*if ($new_access->validate()) {*/
                $access_save = new AccessRecord();
                $access_save->AddAccess($new_access);
                //$access_save->info = "мое инфо";
                $access_save->save();
                return $this->render('add', ['model' => $access_save]); //$this->redirect('/user/index');
            /*} else {
                return $this->redirect('/site/index');
            }*/
        }
        return $this->render('add', ['model' => $new_access]);
    }

}
