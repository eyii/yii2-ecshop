<?php

namespace backend\controllers;

use backend\controllers\interfaces\o_week\CuXiaoInterface;

use common\models\guanli_cuxiao\GoodsActivityModel;
use common\models\guanli_cuxiao\GoodsActivitySearch;
use Yii;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdminGoodsActivityController implements the CRUD actions for GoodsActivityModel model.
 */
class AdminCuxiaoController extends BaseController implements CuXiaoInterface
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
     * Lists all GoodsActivityModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GoodsActivitySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GoodsActivityModel model.
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
     * Creates a new GoodsActivityModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GoodsActivityModel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->act_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing GoodsActivityModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->act_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing GoodsActivityModel model.
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
     * Finds the GoodsActivityModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return GoodsActivityModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = GoodsActivityModel::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


    public function actionDuobaoQibing()
    {
        return $this->render('duobao-qibing');
    }

    public function actionHongbaoLeixing()
    {
        return $this->render('hongbao-leixing');
    }

    public function actionShangpinBaozhuang()
    {
        return $this->render('shangpin-baozhuang');
    }

    public function actionZhufuHeka()
    {
        return $this->render('zhufu-heka');
    }

    public function actionTuangouHuodong()
    {
        return $this->render('tuangou-hHuodong');
    }

    public function actionZhuantiGuanli()
    {
        return $this->render('zhuanti-guanli');
    }

    public function actionPaimaiHuodong()
    {
        return $this->render('paimai-huodong');
    }

    public function actionYouhuiHuodong()
    {
        return $this->render('youhui-huodong');
    }

    public function actionPifaGuanli()
    {
        return $this->render('pifa-guanli');
    }

    public function actionChaozhiLibao()
    {
        return $this->render('chaozhi-libao');
    }

    public function actionJifenShangcheng()
    {
        return $this->render('jifen-shangcheng');
    }
}
