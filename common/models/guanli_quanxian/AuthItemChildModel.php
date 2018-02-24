<?php

namespace common\models\guanli_quanxian;

use Yii;

/**
 * This is the model class for 组权限设置表
 *
 * @property string $parent
 * @property string $child
 *
 * @property AuthItem $parent0
 * @property AuthItem $child0
 */
class AuthItemChildModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%auth_item_child}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent', 'child'], 'required'],
            [['parent', 'child'], 'string'],
         //   [['parent'], 'exist', 'skipOnError' => true, 'targetClass' => AuthItemModel::className(), 'targetAttribute' => ['parent' => 'name']],
         //   [['child'], 'exist', 'skipOnError' => true, 'targetClass' => AuthItemModel::className(), 'targetAttribute' => ['child' => 'name']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'parent' => Yii::t('app', 'Parent'),
            'child' => Yii::t('app', 'Child'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthItemParent()
    {
        return $this->hasOne(AuthItemModel::className(), ['name' => 'parent']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthItemChild()
    {
        return $this->hasOne(AuthItemModel::className(), ['name' => 'child']);
    }

}
