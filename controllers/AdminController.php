<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class AdminController extends Controller
{
    public $layout = "admin";
    /**
     * {@inheritdoc}
     */

    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['site/login']);
        } else {
            return $this->redirect(['category/index']);
        }
    }

    
}
