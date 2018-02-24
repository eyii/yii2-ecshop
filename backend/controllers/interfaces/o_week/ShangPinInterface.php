<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/5
 * Time: 15:49
 */

namespace backend\controllers\interfaces\o_week;


/**
 * Interface 商品管理 http://demo.ecshoptemplate.com/admin/index.php
 * @package backend\controllers\interfaces
 */
interface ShangPinInterface
{
    /**商品列表
     * @return mixed
     */
    public function actionList();

    /*添加商品
     * @return mixed
     */
    public function actionAddShangpin();

    /*商品分类
     * @return mixed
     */
    public function actionFenlei();

    /*用户评论
     * @return mixed
     */
    public function actionPinglun();

    /*商品品牌
     * @return mixed
     */
    public function actionPinpai();

    /*商品类型
     * @return mixed
     */
    public function actionLeiXing();

    /*商品回收站
     * @return mixed
     */
    public function actionHuiShouZhan();

    /*图片批量处理
     * @return mixed
     */
    public function actionPicPiLiangChuLi();

    /*商品批量上传
     * @return mixed
     */
    public function actionShangpinPiliangShangchuan();

    /*商品批量导出
     * @return mixed
     */
    public function actionShangpinPiliangDaochu();

    /*商品批量修改
     * @return mixed
     */
    public function actionShangpinPiliangXiugai();

    /*生成商品代码
     * @return mixed
     */
    public function actionDaima();

    /*标签管理
     * @return mixed
     */
    public function actionBiaoqian();

    /*虚拟商品列表
     * @return mixed
     */
    public function actionXuni();

    /*添加虚拟商品
     * @return mixed
     */
    public function actionAddXuni();
    /*更改加密串
     * @return mixed
     */
    public function actionJiamichuan();

    /*商品自动上下架
     * @return mixed
     */
    public function actionZidongShangxiajia();
}