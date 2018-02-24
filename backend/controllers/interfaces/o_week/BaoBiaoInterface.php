<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/5
 * Time: 15:52
 */

namespace backend\controllers\interfaces\o_week;


/**
 * Interface 报表统计 http://demo.ecshoptemplate.com/admin/index.php
 * @package backend\controllers\interfaces
 */
interface BaoBiaoInterface
{

    //流量分析
    /*
     * @return mixed
     */
    public function actionLiuliangFenxi();
    //客户统计
    /*
     * @return mixed
     */
    public function actionKehuTongji();
    //订单统计
    /*
     * @return mixed
     */
    public function actionDingdanTongji();
    //销售概况
    /*
     * @return mixed
     */
    public function actionXiaoshouZhuangkuang();
    //会员排行
    /*
     * @return mixed
     */
    public function actionHuiyuanPaihang();
    //销售明细
    /*
     * @return mixed
     */
    public function actionXiaoshouMingxi();
    //搜索引擎
    /*
     * @return mixed
     */
    public function actionSousuoYinqing();
    //销售排行
    /*
     * @return mixed
     */
    public function actionXiaoshouPaihang();
    //访问购买率
    /*
     * @return mixed
     */
    public function actionFangwenGoumaili();
    //站外投放JS
    /*
     * @return mixed
     */
    public function actionZhanwaiToufangJs();

}