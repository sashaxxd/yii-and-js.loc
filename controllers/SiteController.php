<?php

namespace app\controllers;

use app\models\Category;
use app\models\Products;
use app\models\TableParam;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $products = Products::find()->all();
        if (Yii::$app->request->isAjax) {
            $this->layout = false;
//            Debug(Yii::$app->request->post());
            $id = Yii::$app->request->post('id');
//            Debug($id);
            $table = TableParam::find()->all();
            $category = Category::find()->where(['lesson_id' => $id])->all();
            return $this->render('ajax',[
                'products' => $products,
                'category' => $category,
                'table' => $table

            ]);


        }
        $table = TableParam::find()->all();
        $category = Category::find()->one();
        return $this->render('index',[
            'products' => $products,
            'category' => $category,
            'table' => $table

        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */

}
