<?php

namespace backend\controllers;

use common\components\rbac\QuLuyouWidget;
use common\components\rbac\RbacWidget;


use Yii;
use common\models\guanli_quanxian\AuthItemChildModel;
use common\models\guanli_quanxian\AuthItemChildSearch;

use yii\web\NotFoundHttpException;


/**
 * AdminAuthItemChildController implements the CRUD actions for AuthItemChildModel model.
 */
class AdminAuthItemChildController extends BaseController
{
    /**
     * @inheritdoc
     */
  /*  public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }*/

    /**
     * Lists all AuthItemChildModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AuthItemChildSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AuthItemChildModel model.
     * @param string $parent
     * @param string $child
     * @return mixed
     */
    public function actionView($parent, $child)
    {
        return $this->render('view', [
            'model' => $this->findModel($parent, $child),
        ]);
    }
    //批量添加权限组
    /**
     * Creates a new AuthItemChildModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AuthItemChildModel();
      //  $model->loadDefaultValues();
        $routes= QuLuyouWidget::getAllController($this);
        $all=[];
        if (Yii::$app->request->isPost){
            $className=AuthItemChildModel::className();
              $class= explode("\\",$className);
            $post=Yii::$app->request->post()[array_pop($class)];
            $childs=$post['child'];
            /*得到item数组*/
            foreach ($childs as $child){
                 $model->parent=$post['parent'];
                $model->child=$child;
               if ($model->validate()&&$model->child!=null&&$model->parent!=null){
                   $all[]=$model->getAttributes();
               }
            }
             return RbacWidget::batchAddChildren($all);
         }else{

            return $this->render('create', [
                'model' => $model,
                'routes'=>$routes
            ]);
        }

    }

    /**
     * Updates an existing AuthItemChildModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $parent
     * @param string $child
     * @return mixed
     */
    public function actionUpdate($parent, $child)
    {
        $model = $this->findModel($parent, $child);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'parent' => $model->parent, 'child' => $model->child]);
        } else {
            $routes=QuLuyouWidget::getAllController($this);
            return $this->render('update', [
                'model' => $model,
                'routes'=>$routes
            ]);
        }
    }
        //批量删除项
    /**
     * @return \yii\web\Response
     */
    public function actionBatchDel()
    {
       RbacWidget::batchDelItem();
        return $this->redirect(['index']);
    }
    /**
     * Deletes an existing AuthItemChildModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $parent
     * @param string $child
     * @return mixed
     */
    public function actionDelete($parent, $child)
    {
        $this->findModel($parent, $child)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AuthItemChildModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $parent
     * @param string $child
     * @return AuthItemChildModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($parent, $child)
    {
        if (($model = AuthItemChildModel::findOne(['parent' => $parent, 'child' => $child])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
