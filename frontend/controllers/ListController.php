<?php

namespace frontend\controllers;

use common\models\Book;

class ListController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $models = Book::find()->all();
        return $this->render('index',['models'=>$models]);
    }

}
