<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/18
 * Time: 3:53
 */

namespace frontend\controllers;


use frontend\controllers\interfaces\four_week\YongHuZhongXinInterface;

class UserController extends BaseController implements YongHuZhongXinInterface
{
        public function actionIndex(){

            return $this->render('index');
        }
        public function actionZhaohuimima(){

            return $this->render('zhaohuimima');
        }
    //欢迎页
    /**
     * @return mixed
     */
    public function actionHuanyingye()
    {
        return $this->render('huanyingye');
    }
    //用户信息
    /**
     * @return mixed
     */
    public function actionYonghuXinxi()
    {
        return $this->render('yonghu-xinxi');
    }

    // 我的订单
    /**
     * @return mixed
     */
    public function actionWodeDingdan()
    {
        return $this->render('wode-dingdan');
    }
    // 收货地址
    /**
     * @return mixed
     */
    public function actionShouhuoDizhi()
    {
        return $this->render('shouhuo-dizhi');
    }
    // 我的收藏
    /**
     * @return mixed
     */
    public function actionWodeShoucang()
    {
        return $this->render('wode-shoucang');
    }
    // 我的留言
    /**
     * @return mixed
     */
    public function actionWodeLiuyan()
    {
        return $this->render('wode-liuyan');
    }
    // 我的标签
        /**
         * @return mixed
         */
        public function actionWodeBiaoqian()
        {
            return $this->render('wode-biaoqian');
        }
    // 缺货登记
        /**
         * @return mixed
         */
        public function actionQuehuoDengji()
        {
            return $this->render('quehuo-dengji');
        }
    // 我的红包
        /**
         * @return mixed
         */
        public function actionWodeHongbao()
        {
            return $this->render('wode-hongbao');
        }
    // 我的推荐
        /**
         * @return mixed
         */
        public function actionWodeTuijian()
        {
            return $this->render('wode-tuijian');
        }
    // 我的评论
        /**
         * @return mixed
         */
        public function actionWodePinglun()
        {
            return $this->render('wode-pinglun');
        }
    // 跟踪包裹
        /**
         * @return mixed
         */
        public function actionGenzongBaoguo()
        {
            return $this->render('genzong-baoguo');
        }
    // 资金管理
        /**
         * @return mixed
         */
        public function actionZijinGuanli()
        {
            return $this->render('zijin-guanli');
        }
        //密码问题找回密码
        public function actionMimaWenti()
        {
            return $this->render('mima-wenti');
        }
        //邮件找回密码
        public function actionZhuceYoujianZhaohuimima()
    {
         // TODO: Implement actionZhuceYoujianZhaohuimima() method.
         return $this->render('zhuce-youjian-zhaohuimima');
    }
}