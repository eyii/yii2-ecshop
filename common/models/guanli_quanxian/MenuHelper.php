<?php

namespace common\models\guanli_quanxian;



use common\components\common\YiiSuanfaWidget;
use Yii;


use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/**
 * MenuHelper used to generate menu depend of user role.
 * Usage
 * 
 * ```
 * use mdm\admin\components\MenuHelper;
 * use yii\bootstrap\Nav;
 *
 * echo Nav::widget([
 *    'items' => MenuHelper::getAssignedMenu(Yii::$app->user->id)
 * ]);
 * ```
 * 
 * To reformat returned, provide callback to method.
 * 
 * ```
 * $callback = function ($menu) {
 *    $data = eval($menu['data']);
 *    return [
 *        'label' => $menu['name'],
 *        'url' => [$menu['route']],
 *        'options' => $data,
 *        'items' => $menu['children']
 *        ]
 *    ]
 * }
 *
 * $items = MenuHelper::getAssignedMenu(Yii::$app->user->id, null, $callback);
 * ```
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @since 1.0
 */
class MenuHelper
{

    //获取ID用户组权限菜单
    /**
     * Use to get assigned menu of user.
     * @param mixed $userId
     * @param integer $root
     * @param \Closure $callback use to reformat output.
     * callback should have format like
     * 
     * ```
     * function ($menu) {
     *    return [
     *        'label' => $menu['name'],
     *        'url' => [$menu['route']],
     *        'options' => $data,
     *        'items' => $menu['children']
     *        ]
     *    ]
     * }
     * ```
     * @param boolean  $refresh
     * @return array
     */
    public static function getAssignedMenu($userId, $allmenu=false,$root = null, $callback = null, $refresh = false)
    {
       //获取菜单列表
         $query=MenuModel::find();
         //带权限的
        if ($allmenu==false){
            $auth = Yii::$app->getAuthManager();
            $permissions=$auth->getPermissionsByUser($userId);
            $routes=array_keys($permissions);
            $query= $query->where(['route'=>$routes]);
        }
        //不带权限的
        $menus =$query->select(['id','name','parent','route','data',])->all();

        $data = ArrayHelper::toArray($menus, [
            'common\models\guanli_quanxian\MenuModel' => [
                'id',
                'label'=> function ($menu) {
                     return $menu->name;
                },
                'parent',
                 'url' => function ($menu) {
                     return Url::toRoute([$menu->route]);
                },
                'icon'=> function ($menu) {
                    return $menu->data;
                },

            ],
        ]);
         return YiiSuanfaWidget::getTree($data,0,'parent','id','children');
    }

}
