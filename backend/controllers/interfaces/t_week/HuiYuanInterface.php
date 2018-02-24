<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/5
 * Time: 15:54
 */

namespace backend\controllers\interfaces\t_week;


/**
 * Interface 会员管理
 * @package backend\controllers\interfaces
 */
interface HuiYuanInterface
{
     /*会员列表
     * @return mixed
     */
    public function actionList();

    /*添加会员
     * @return mixed
     */
    public function actionAddShangPin();

    /*会员等级
     * @return mixed
     */
    public function actionFenlei();

    /*会员整合
     * @return mixed
     */
    public function actionPinglun();

    /*会员留言
     * @return mixed
     */
    public function actionPinpai();

    /*充值和提现申请
     * @return mixed
     */
    public function actionLeiXing();

    /*资金管理
     * @return mixed
     */
    public function actionHuiShouZhan();


}