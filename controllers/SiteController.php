<?php

namespace app\controllers;

use app\models\Gallery;
use app\models\Product;
use app\models\RegistrationForm;
use app\models\User;
use Yii;
use yii\data\Pagination;
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
        $posts = Product::find()->all();
//        $pages = new Pagination(['totalCount' => $all->count(), 'pageSize' => 6]);
//        $posts = $all->offset($pages->offset)
//            ->limit($pages->limit)
//            ->all();
        return $this->render('index', ['posts' => $posts, 'pages' => $pages]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionRegistration()
    {
        $model = new RegistrationForm();
        if ($model->load(Yii::$app->request->post())) {
            $newUser = User::find()
                ->where(['username' => $model->username])
                ->one();
            if ($newUser === NULL) {
                $user = new User();
                $user->username = $model->username;
                $user->password = \Yii::$app->security->generatePasswordHash($model->password);;
                $user->full_name = $model->full_name;
                $user->save();
                Yii::$app->session->setFlash('success', 'Вы успешно зарегистрировались');
                return $this->actionLogin();
            } else {
                Yii::$app->session->setFlash('error', 'Пользователь с таким логином уже зарегистрирован');
                return $this->refresh();
            }

        }
        return $this->render('registration', ['model' => $model]);
    }

    public function actionGallery()
    {
        $gallery = Gallery::find()->all();
        return $this->render('gallery', ['gallery' => $gallery]);
    }
}
