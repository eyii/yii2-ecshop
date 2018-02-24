<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/24
 * Time: 2:18
 */

namespace common\components\rbac;


use Yii;
use yii\base\Widget;
use yii\db\Exception;

//yii migrate --migrationPath=@yii/rbac/migrations/
class RbacWidget extends Widget
{
    //item表权限项添加
    static  public function createPermissionToAuthItem($item)
    {
        $auth = Yii::$app->authManager;
        if ($auth->getPermission($item)==null){
            $createPost = $auth->createPermission($item);
            $createPost->description = '创建了 ' . $item . ' 许可';
            return $auth->add($createPost);
        }
             return ['已存在',0,0];
     }

    //item表Role项添加
    static  public function createRoleToAuthItem($item)
    {
        $auth = Yii::$app->authManager;
        if ( $auth->getRole($item)!=null){
            $role = $auth->createRole($item);
            $role->description = '创建了 ' . $item . ' 角色';
            return  $auth->add($role);
        }
        return ['已存在',0,0];
     }
    //AuthItemChild表 角色权限添加
    static public function createEmpowermentToAuthItemChild($items)
    {
        $auth = Yii::$app->authManager;
        //只是new并没有写入到数据库
        $parent = $auth->createRole($items['parent']);
        $child = $auth->createPermission($items['child']);
         return  $auth->hasChild($parent,$child)?false:$auth->addChild($parent, $child);
     }
    //
    static public function assign($item)
    {
        $auth = Yii::$app->authManager;
        $reader = $auth->createRole($item['name']);
        $auth->assign($reader, $item['description']);
    }

    static public function beforeAction($action)
    {
        $action = Yii::$app->controller->action->id;
        if(\Yii::$app->user->can($action)){
            return true;
        }else{
            throw new \yii\web\UnauthorizedHttpException('对不起，您现在还没获此操作的权限');
        }
    }
    public function can($permissionName, $params = [], $allowCaching = true)
    {
        if ($allowCaching && empty($params) && isset($this->_access[$permissionName])) {
            return $this->_access[$permissionName];
        }
        $access = Yii::$app->getAuthManager()->checkAccess($this->getId(), $permissionName, $params);
        if ($allowCaching && empty($params)) {
            $this->_access[$permissionName] = $access;
        }

        return $access;
    }

    static public function delRole($parentName){
        $auth = Yii::$app->authManager;
        $parent = $auth->createRole($parentName);
       return $auth->getRole($parentName)!==null?$auth->removeChildren($parent):'';
    }

    static public function renameRole($parentName){
        $auth = Yii::$app->authManager;
        $parent = $auth->createRole($parentName);
        return $auth->getRole($parentName)!==null?$auth->removeChildren($parent):'';
    }

    //批量指定路由三表所有相关项
    public function remove($routes)
    {
        $manager = Yii::$app->getAuthManager();
        foreach ($routes as $route) {
            try {
                $item = $manager->createPermission(trim($route, '/'));
                $manager->remove($item);
            } catch (Exception $exc) {
                return [$exc->getMessage(). __METHOD__,0,0];
            }
        }
      //  Helper::invalidate();
    }
    //删除角色组权限 ItemChild
    public function removeChildren($parentName)
    {
        try{
            $auth = Yii::$app->getAuthManager();
            $parent= $auth->createRole($parentName);
            $auth->removeChildren($parent);
        }catch (Exception $e){
            return [$e->getMessage(). __METHOD__,0,0];
        }
        //  Helper::invalidate();
    }
    //批量添加权限 ItemChild 和Item
    static public function batchAddChildren($routes){
      try{
          $self=new self;
          foreach ($routes as $route){
              $self->createPermissionToAuthItem($route['child']);
              $self->createEmpowermentToAuthItemChild($route);
          }
          return ['批量添加完成', 0, 0];
      }catch (Exception $e){
          return ['失败了', -1, ['$e->getMessage()'.__METHOD__]];

      }
      }

      public static function batchAddMenu(){

      }
        //批量删除项目
    public static function batchDelItem(){
          if (Yii::$app->request->isPost){
              $post= Yii::$app->request->post();
              $AuthItemChildModel=$post['AuthItemChildModel'];
              $childs=$AuthItemChildModel['child'];
              $self=new self;
              $self->remove($childs);
              return ['删除完成', 0, 0];
          }
         return ['删除完成', 0, 0];
    }
}