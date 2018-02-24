<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/5
 * Time: 15:53
 */

namespace backend\controllers\interfaces\o_week;


interface WenZhangInterface
{
  /*文章分类
     * @return mixed
     */
    public function actionWenzhangFenlei();

    /*文章列表
     * @return mixed
     */
    public function actionWenzhangList();

    /*文章自动发布
     * @return mixed
     */
    public function actionWenzhangZidongFabu();

    /*在线调查
     * @return mixed
     */
    public function actionZaixianDiaocha();


}