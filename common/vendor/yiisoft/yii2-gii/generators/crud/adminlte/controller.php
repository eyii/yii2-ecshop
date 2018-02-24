<?php
/**
 * This is the template for generating a CRUD controller class file.
 */

use yii\db\ActiveRecordInterface;
use yii\helpers\StringHelper;


/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$controllerClass = StringHelper::basename($generator->controllerClass);
$modelClass = StringHelper::basename($generator->modelClass);
$searchModelClass = StringHelper::basename($generator->searchModelClass);
if ($modelClass === $searchModelClass) {
    $searchModelAlias = $searchModelClass . 'Search';
}
$model = new $generator->modelClass;
$tableColumnInfo = $model->getTableColumnInfo();
/* @var $class ActiveRecordInterface */
$class = $generator->modelClass;
$pks = $class::primaryKey();
$urlParams = $generator->generateUrlParams();
$actionParams = $generator->generateActionParams();
$actionParamComments = $generator->generateActionParamComments();

echo "<?php\n";
?>

namespace <?= StringHelper::dirname(ltrim($generator->controllerClass, '\\')) ?>;

use Yii;
use yii\data\Pagination;
use <?= ltrim($generator->modelClass, '\\') ?>;
<?php if (!empty($generator->searchModelClass)): ?>
use <?= ltrim($generator->searchModelClass, '\\') . (isset($searchModelAlias) ? " as $searchModelAlias" : "") ?>;
<?php else: ?>
use yii\data\ActiveDataProvider;
<?php endif; ?>
use <?= ltrim($generator->baseControllerClass, '\\') ?>;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * <?= $controllerClass ?> implements the CRUD actions for <?= $modelClass ?> model.
 */
class <?= $controllerClass ?> extends BaseController
{


    /**
     * Lists all <?= $modelClass ?> models.
     * @return mixed
     */
    public function actionIndex()
    {
        $query = <?= $modelClass ?>::find();
        $compact=$this->getCompact($query);
        return $this->render('index',$compact);
    }

    /**
    * 文件缓存
    * @return array
    */
    public function behaviors()
    {
        $behaviors[]=  [
            'class' => 'yii\filters\PageCache', // 设置需要加载的缓存文件
            'only' => ['index'], // 设置需要缓存的控制器
            'duration' => 100, // 设置过期时间
            'dependency' => [ // 设置依赖关系
            'class' => 'yii\caching\FileDependency',
            'fileName' => 'robots.txt'
          ]
        ];
        return $behaviors;
    }
    /**
     * Displays a single <?= $modelClass ?> model.
     * <?= implode("\n     * ", $actionParamComments) . "\n" ?>
     * @return mixed
     */
    public function actionView(<?= $actionParams ?>)
    {
        $model = $this->findModel($id);
        return json_encode($model->getAttributes());

    }

    /**
     * Creates a new <?= $modelClass ?> model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new <?= $modelClass ?>();
        if ($model->load(Yii::$app->request->post())) {
        <?php 
        echo "\n";
foreach($tableColumnInfo as $key=>$column){
    if(empty($column['defaultValue']) == false){
        $defaultValue = $column['phpType'] == 'string' ? "'{$column['defaultValue']}'" : $column['defaultValue'];
        echo "              if(empty(\$model->$key) == true){\n";
        echo "                  \$model->$key = ".$defaultValue.";\n";
        echo "              }\n";
    }
    switch($key){
        case 'create_user':
            echo "              \$model->create_user = Yii::\$app->user->identity->uname;\n";
            break;
        case 'create_date':
            echo "              \$model->create_date = date('Y-m-d H:i:s');\n";
            break;
        case 'update_user':
            echo "              \$model->update_user = Yii::\$app->user->identity->uname;\n";
            break;
        case 'update_date':
            echo "              \$model->update_date = date('Y-m-d H:i:s');";
            break;
    }
}
        ?>
        
            if($model->validate() == true && $model->save()){
                $msg = array('errno'=>0, 'msg'=>'保存成功');
                return  json_encode($msg);
            }
            else{
                $msg = array('errno'=>2, 'data'=>$model->getErrors());
            return  json_encode($msg);
            }
        } else {
            $msg = array('errno'=>2, 'msg'=>'数据出错');
            return  json_encode($msg);
        }
    }

    /**
     * Updates an existing <?= $modelClass ?> model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * <?= implode("\n     * ", $actionParamComments) . "\n" ?>
     * @return mixed
     */
    public function actionUpdate()
    {
        $id = Yii::$app->request->post('id');
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())) {
        <?php 
                    echo "\n";
            foreach($tableColumnInfo as $key=>$column){
                if(empty($column['defaultValue']) == false){
                    $defaultValue = $column['phpType'] == 'string' ? "'{$column['defaultValue']}'" : $column['defaultValue'];
                    echo "              \$model->$key = ".$defaultValue.";\n";
                }
                switch($key){
                    case 'update_user':
                        echo "              \$model->update_user = Yii::\$app->user->identity->uname;\n";
                        break;
                    case 'update_date':
                        echo "              \$model->update_date = date('Y-m-d H:i:s');";
                        break;
                }
            }
        ?>
        
        
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
     * Deletes an existing <?= $modelClass ?> model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * <?= implode("\n     * ", $actionParamComments) . "\n" ?>
     * @return mixed
     */
    public function actionDelete(array $ids)
    {
        if(count($ids) > 0){
            $c = <?= $modelClass ?>::deleteAll(['in', 'id', $ids]);
            return json_encode(array('errno'=>0, 'data'=>$c, 'msg'=>json_encode($ids)));
        }
        else{
            return json_encode(array('errno'=>2, 'msg'=>''));
        }
    
  
    }

    /**
     * Finds the <?= $modelClass ?> model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * <?= implode("\n     * ", $actionParamComments) . "\n" ?>
     * @return <?=                   $modelClass ?> the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel(<?= $actionParams ?>)
    {
<?php
if (count($pks) === 1) {
    $condition = '$id';
} else {
    $condition = [];
    foreach ($pks as $pk) {
        $condition[] = "'$pk' => \$$pk";
    }
    $condition = '[' . implode(', ', $condition) . ']';
}
?>
        if (($model = <?= $modelClass ?>::findOne(<?= $condition ?>)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
