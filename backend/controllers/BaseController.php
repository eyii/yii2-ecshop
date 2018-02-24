<?php
namespace backend\controllers;

use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use yii\helpers\Url;
use common\models\guanli_quanxian\AdminLog;
use common\utils\CommonFun;
use yii\helpers\StringHelper;
use yii\helpers\Inflector;
use yii\web\NotFoundHttpException;

//2017/0316
class BaseController extends Controller
{
    public $layout = "lte_main";

    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {

        if (Yii::$app->user->isGuest){
            return  $this->redirect(Url::toRoute('site/index'));
        }
       $controller=Yii::$app->controller->id;
         $action = Yii::$app->controller->action->id;
        $route=$controller.'/'.$action;
         if(\Yii::$app->user->can($route)){
            return true;
        }
        else{

            throw new NotFoundHttpException('对不起，您现在还没获此操作的权限');
        }


        throw new NotFoundHttpException('对不起，您现在还没获此操作的权限');
    }

}

?>