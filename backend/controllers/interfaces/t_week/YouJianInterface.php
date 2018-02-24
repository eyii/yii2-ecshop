<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/5
 * Time: 15:56
 */

namespace backend\controllers\interfaces\t_week;


/**
 * Interface 邮件群发管理 http://demo.ecshoptemplate.com/admin/index.php
 * @package backend\controllers\interfaces
 */
interface YouJianInterface
{




    //关注管理
    /*
     * @return mixed
     */
    public function actionGuanzhu();
    //邮件订阅管理
    /*
     * @return mixed
     */
    public function actionYoujianDingyue();
    //杂志管理
    /*
     * @return mixed
     */
    public function actionZazhi();

    //邮件队列管理
    /*
     * @return mixed
     */
    public function actionYoujianDuilie();

}