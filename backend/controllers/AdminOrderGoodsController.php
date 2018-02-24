<?php

namespace backend\controllers;

use backend\controllers\interfaces\o_week\DingDanInterface;
use common\models\guanli_dingdan\OrderGoodsModel;
use common\models\guanli_dingdan\OrderGoodsSearch;
use Yii;

use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdminOrderGoodsController implements the CRUD actions for OrderGoodsModel model.
 */
class AdminOrderGoodsController extends BaseController implements DingDanInterface
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
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all OrderGoodsModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrderGoodsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OrderGoodsModel model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new OrderGoodsModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new OrderGoodsModel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->rec_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing OrderGoodsModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->rec_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing OrderGoodsModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OrderGoodsModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return OrderGoodsModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = OrderGoodsModel::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    //订单列表
    public function actionDingdanList()
    {
        return $this->redirect(Url::toRoute(['admin-order-goods/index']));
    }

    public function actionDingdanQuery()
    {
        return $this->render('dingdan-query');
    }

    public function actionHebingOrder()
    {
        return $this->render('hebing-order');
    }

    public function actionDingdanDayin()
    {
        return $this->render('dingdan-dayin');
    }

    public function actionQuehuoDengji()
    {
        return $this->render('quehuo-dengji');
    }

    public function actionTianjiaDingdan()
    {
        return $this->render('tianjia-dingdan');
    }

    public function actionFahuodanLiebiao()
    {
        return $this->redirect(Url::toRoute(['admin-fahuodan/index']));
    }

    public function actionTuihuodanLiebiao()
    {
        return $this->render('tuihuodan-liebiao');
    }


}
