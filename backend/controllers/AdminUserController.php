<?php

namespace backend\controllers;

use Yii;
use yii\data\Pagination;
use common\models\guanli_quanxian\AdminUser;
use yii\web\NotFoundHttpException;

/**
 * AdminUserController implements the CRUD actions for AdminUser model.
 */
class AdminUserController extends BaseController
{


    /**
     * Lists all AdminUser models.
     * @return mixed
     */
    public function actionIndex()
    {
        $query = AdminUser::find();
        $compact=$this->getCompact($query);
        return $this->render('index',$compact);
    }

    /**
     * Displays a single AdminUser model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        //$id = Yii::$app->request->post('id');
        $model = $this->findModel($id);
        return json_encode($model->getAttributes());

    }

    /**
     * Creates a new AdminUser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AdminUser();
        if ($model->load(Yii::$app->request->post())) {
            if(empty($model->is_online) == true){
                $model->is_online = 'n';
            }
            if(empty($model->status) == true){
              $model->status = 10;
            }
            $model->password = Yii::$app->security->generatePasswordHash($model->password);
            $model->create_user = Yii::$app->user->identity->uname;
            $model->create_date = date('Y-m-d H:i:s');
            $model->update_user = Yii::$app->user->identity->uname;
            $model->update_date = date('Y-m-d H:i:s');            
            if($model->validate() == true && $model->save()){
                $msg = array('errno'=>0, 'msg'=>'保存成功');
                return json_encode($msg);
            }
            else{
                $msg = array('errno'=>2, 'data'=>$model->getErrors());
                return json_encode($msg);
            }
        } else {
            $msg = array('errno'=>2, 'msg'=>'数据出错');
            return json_encode($msg);
        }
    }

    /**
     * Updates an existing AdminUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate()
    {
        $id = Yii::$app->request->post('id');
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())) {
              
            //$model->is_online = 'n';
            //$model->status = 10;
            $model->update_user = Yii::$app->user->identity->uname;
            $model->update_date = date('Y-m-d H:i:s');        
        
            if($model->validate() == true && $model->save()){
                $msg = array('errno'=>0, 'msg'=>'保存成功');
                echo json_encode($msg);
            }
            else{
                $msg = array('errno'=>2, 'data'=>$model->getErrors());
                echo json_encode($msg);
            }
        } else {
            $msg = array('errno'=>2, 'msg'=>'数据出错');
            echo json_encode($msg);
        }
    
    }

    /**
     * Deletes an existing AdminUser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete(array $ids)
    {
        if(count($ids) > 0){
            $c = AdminUser::deleteAll(['in', 'id', $ids]);
            return json_encode(array('errno'=>0, 'data'=>$c, 'msg'=>json_encode($ids)));
        }
        else{
            return json_encode(array('errno'=>2, 'msg'=>''));
        }
    
  
    }

    /**
     * Finds the AdminUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return AdminUser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AdminUser::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
