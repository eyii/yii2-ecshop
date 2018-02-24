<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%wechat_user}}".
 *
 * @property integer $id
 * @property string $openid
 * @property string $nickname
 * @property integer $sex
 * @property string $headimgurl
 * @property string $country
 * @property string $province
 * @property string $city
 * @property string $access_token
 * @property string $refresh_token
 * @property string $created_at
 */
class AdminWechatUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wechat_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'openid', 'nickname', 'sex', 'headimgurl', 'country', 'province', 'city', 'access_token', 'refresh_token'], 'required'],
            [['id', 'sex'], 'integer'],
            [['created_at'], 'safe'],
            [['openid', 'headimgurl', 'access_token', 'refresh_token'], 'string', 'max' => 255],
            [['nickname', 'country', 'province', 'city'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'openid' => Yii::t('app', 'Openid'),
            'nickname' => Yii::t('app', '微信昵称'),
            'sex' => Yii::t('app', '性别'),
            'headimgurl' => Yii::t('app', '头像'),
            'country' => Yii::t('app', '国家'),
            'province' => Yii::t('app', '省份'),
            'city' => Yii::t('app', '城市'),
            'access_token' => Yii::t('app', 'Access Token'),
            'refresh_token' => Yii::t('app', 'Refresh Token'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }
}
