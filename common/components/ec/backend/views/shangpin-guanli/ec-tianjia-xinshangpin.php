
<?php

use yii\widgets\ActiveForm;
use \yii\helpers\Html;
use \common\components\common\YiiPdhcWidget;
/* @var $this yii\web\View */
/* @var $model common\models\GoodsModel */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin(['class'=>'form-inline']); ?>
<div id="good_app">
    <div class="goods-model-form">
        <el-tabs type="border-card">
           <!-- 通用信息-->
            <el-tab-pane label="通用信息">
            <?=$this->render('ec-tianjia-xinshangpin-tongyong',['model'=>$model,'form'=>$form])?>
            </el-tab-pane>
            <!-- 详细描述-->
            <el-tab-pane label="详细描述">
                <?= $form->field($model, 'goods_desc')->textarea(['rows' => 6]) ?>
                <?=Html::submitButton('提交',['class'=>'btn btn-success'])?>
            </el-tab-pane>
            <!--其他信息-->
            <el-tab-pane label="其他信息">
               <!-- 商品重量：-->
                <?=$form->field($model, 'goods_weight')->textInput()?>
                <!-- 商品库存数量-->
                <?=$form->field($model, 'goods_number')->textInput()?>
               <!-- 库存警告数量-->
                <?=$form->field($model, 'warn_number')->textInput()?>
                <!--加入推荐：精品 新品 热销-->
                <?=$form->field($model, 'is_best')->checkbox()?>
                <?=$form->field($model, 'is_new')->checkbox()?>
                <?=$form->field($model, 'is_hot')->checkbox()?>
                <!--上架开放销售：-->
                <?=$form->field($model, 'is_on_sale')->checkbox(['label'=>'打勾表示允许销售，否则不允许销售。','labelOptions'=>['checked'=>true]])?>
                <?=$form->field($model, 'is_alone_sale')->checkbox(['label'=>' 打勾表示能作为普通商品销售，否则只能作为配件或赠品销售。'])?>
                是否为免运费商品
                <?=$form->field($model, 'is_shipping')->checkbox(['label'=>'打勾表示此商品不会产生运费花销，否则按照正常运费计算。'])?>
              <!--  商品关键词：-->
                <?=$form->field($model, 'keywords')->textInput()?>

                <?=Html::submitButton('提交',['class'=>'btn btn-success'])?>
            <!--
              能作为普通商品销售：


                商品简单描述：
                商家备注：-->
            </el-tab-pane>
            <!--商品属性-->
            <el-tab-pane label="商品属性">
              <!--  商品类型：-->
                <?=$form->field($model, 'goods_type')->textInput()?>

                <?=\yii\helpers\Html::submitButton('提交',['class'=>'btn btn-success'])?>
            </el-tab-pane>
            <!--商品相册-->
            <el-tab-pane label="商品相册">
                <?= $form->field($model, 'goods_img')->textInput(['maxlength' => true]) ?>
                <!--原始图片-->
                <?= $form->field($model, 'original_img')->textInput(['maxlength' => true]) ?>
                <?=Html::submitButton('提交',['class'=>'btn btn-success'])?>
            </el-tab-pane>
            <!--商关联商品-->
            <el-tab-pane label="关联商品">
                <?=$form->field($model, 'goods_name_style')->textInput()?>
                <?=Html::submitButton('提交',['class'=>'btn btn-success'])?>
            </el-tab-pane>
            <!--配件-->
            <el-tab-pane label="配件">
                <?=$form->field($model, 'goods_name_style')->textInput()?>
                <?=Html::submitButton('提交',['class'=>'btn btn-success'])?>
            </el-tab-pane>
            <!--关联文章-->
            <el-tab-pane label="关联文章">
                <?=$form->field($model, 'goods_name_style')->textInput()?>
                <?=Html::submitButton('提交',['class'=>'btn btn-success'])?>
            </el-tab-pane>
        </el-tabs>
    </div>
</div>
<?php ActiveForm::end(); ?>


<script>
    new Vue().$mount('#good_app');
</script>






