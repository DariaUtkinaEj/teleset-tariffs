<?php

namespace app\controllers;

use app\models\ContactForm;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPrivacyPolicy()
    {
        $this->layout = 'secondary';
        return $this->render('privacy-policy');
    }

    public function actionSendMail()
    {
        $this->layout = 'secondary';
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact()) return $this->render('success');
        return $this->render('fail');
    }

}
