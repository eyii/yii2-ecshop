<?php

namespace common\models\guanli_huiyuan;

use common\models\guanli_xitong\DiquModel;
use Yii;

/**
 * 用户地址表
 *
 * This is the model class for table "{{%user_address}}".
 *
 * @property string $address_id
 * @property string $address_name
 * @property string $user_id
 * @property string $consignee
 * @property string $email
 * @property integer $country
 * @property integer $province
 * @property integer $city
 * @property integer $district
 * @property string $address
 * @property string $zipcode
 * @property string $tel
 * @property string $mobile
 * @property string $sign_building
 * @property string $best_time
 */
class UserAddressModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_address}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'country', 'province', 'city', 'district'], 'integer'],
            [['address_name'], 'string', 'max' => 50],
            [['consignee', 'email', 'zipcode', 'tel', 'mobile'], 'string', 'max' => 60],
            [['address', 'sign_building', 'best_time'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'address_id' => Yii::t('app', 'Address ID'),
            'address_name' => Yii::t('app', '名称'),
            'user_id' => Yii::t('app', '用户表流水号'),
            'consignee' => Yii::t('app', '收货人名字'),
            'email' => Yii::t('app', '收货人email'),
            'country' => Yii::t('app', '收货人国家'),
            'province' => Yii::t('app', '收货人省份'),
            'city' => Yii::t('app', '收货人城市'),
            'district' => Yii::t('app', '收货人地区'),
            'address' => Yii::t('app', '收货人详细地址'),
            'zipcode' => Yii::t('app', '收货人邮编'),
            'tel' => Yii::t('app', '收货人电话'),
            'mobile' => Yii::t('app', '收货人手机号'),
            'sign_building' => Yii::t('app', '收货地址标志性建筑名'),
            'best_time' => Yii::t('app', '收货人最佳收货时间'),
        ];
    }




}
