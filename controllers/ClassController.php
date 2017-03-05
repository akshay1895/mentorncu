<?php

namespace app\models;

class ClassController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
