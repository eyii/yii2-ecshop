<?php

namespace backend\controllers;

use backend\controllers\interfaces\o_week\ShangPinInterface;


use common\models\guanli_shangpin\GoodsModel;
use common\models\guanli_shangpin\GoodsSearch;
use Yii;


use yii\helpers\Url;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdminGoodsController implements the CRUD actions for GoodsModel model.
 */
class AdminGoodsController extends BaseController implements ShangPinInterface
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
     * Lists all GoodsModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GoodsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GoodsModel model.
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
     * Creates a new GoodsModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GoodsModel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->goods_id]);
        } else {

            $model->loadDefaultValues();
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing GoodsModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->goods_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing GoodsModel model.
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
     * Finds the GoodsModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return GoodsModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = GoodsModel::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**商品列表
     * @return mixed
     */
    public function actionList()
    {
        return $this->render('list');
    }
    //添加新商品
    public function actionAddShangpin()
    {
        return $this->render('add-shangpin');
    }
    //商品分类
    public function actionFenlei()
    {
        return $this->redirect(Url::toRoute(['admin-goods-type/index']));
    }

    public function actionPinglun()
    {
        return $this->render('pinglun');
    }

    public function actionPinpai()
    {
        return $this->render('pinpai');
    }

    public function actionLeiXing()
    {
        return $this->render('leixing');
    }

    public function actionHuiShouZhan()
    {

        $searchModel = new GoodsSearch();
        $xuni['GoodsSearch']=[];
        $xuni['GoodsSearch']['is_delete']=1;
        $dataProvider = $searchModel->search($xuni);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }

    public function actionPicPiLiangChuLi()
    {
        return $this->render('tupian-piliang-chuli');
    }

    public function actionShangpinPiliangShangchuan()
    {
        return $this->render('shangpin-piliang-shangchuan');
    }

    public function actionShangpinPiliangDaochu()
    {
        return $this->render('shangpin-piliang-daochu');
    }

    public function actionShangpinPiliangXiugai()
    {
        return $this->render('shangpin-piliang-xiugai');
    }

    public function actionDaima()
    {
        return $this->render('daima');
    }
    //商品标签
    public function actionBiaoqian()
    {

        return $this->redirect(Url::toRoute(['admin-tag/index']));
    }

    public function actionXuni()
    {
        $searchModel = new GoodsSearch();
        $xuni['GoodsSearch']=[];
        $xuni['GoodsSearch']['is_real']=0;
        $dataProvider = $searchModel->search($xuni);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAddXuni()
    {
        return $this->render('add-xuni');
    }

    public function actionJiaMiChuan()
    {
        return $this->render('jiamichuan');
    }

    public function actionZidongShangxiajia()
    {
        return $this->render('zidong-shangxiajia');
    }


}
