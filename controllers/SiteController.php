<?php

namespace app\controllers;

use app\models\Category;
use app\models\Products;
use app\models\TableParam;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;


class SiteController extends AppController
{
    /**
     * {@inheritdoc}
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

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionIndex($id = null)
    {
        $products = Products::find()->all();


        if (Yii::$app->request->isAjax) {
            $this->layout = false;
            $id = Yii::$app->request->get('id');
            $category = Category::find()->where(['lesson_id' => $id])->all();

            return $this->render('ajax',[
                'products' => $products,
                'category' => $category,


            ]);


        }

        if (Yii::$app->request->get('id'))
        {
            $category = Category::find()->where(['lesson_id' => $id])->all();
            $this->setMeta($category[0]->lesson->name);
            return $this->render('index',[
                'products' => $products,
                'category' => $category,


            ]);


        }

        $category = Category::find()->where(['lesson_id' => 1])->all();

        return $this->render('index',[
            'products' => $products,
            'category' => $category,


        ]);
    }


    public function actionTable()
    {
        $products = Products::find()->all();
        if (Yii::$app->request->isAjax || Yii::$app->request->isGet) {
            $this->layout = false;
            $id = Yii::$app->request->get('id');
            $category = Category::find()->one();
            $table = TableParam::find()->where(['category_id' => $id])->all();
            return $this->render('ajax2',[
                'products' => $products,
                'category' => $category,
            'table' => $table


            ]);
        }
            return false;
    }


}
