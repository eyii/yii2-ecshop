<?php

namespace backend\controllers;

use common\components\rbac\QuLuyouWidget;
use Yii;
use common\models\guanli_quanxian\MenuModel;
use common\models\guanli_quanxian\MenuSearch;

use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MenuController implements the CRUD actions for MenuModel model.
 */
class AdminMenuController extends BaseController
{
    /**
     * @inheritdoc
     */
   public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                //    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all MenuModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MenuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MenuModel model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new MenuModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MenuModel();

        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            $modeldata = $post['MenuModel'];
            $menus = $modeldata['names'];
            foreach ($menus as $menu) {
                $model = new MenuModel();
                $item = explode("====", $menu);
                $r = $model->load(Yii::$app->request->post());
                $model->route = $item[0];
                $model->name = $item[1];
                if($model->validate() && $model->save()){

                }else{
                 return   $model->getErrors();
                }
            }
        }
         $routes=QuLuyouWidget::getAllController($this);
            return $this->render('create', [
                'model' => $model,
                'routes'=>  $routes
            ]);
        }


    /**
     * Updates an existing MenuModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $routes=QuLuyouWidget::getAllController($this);
            return $this->render('update', [
                'model' => $model,
                'routes'=>$routes
            ]);
        }
    }

    /**
     * Deletes an existing MenuModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MenuModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MenuModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MenuModel::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
