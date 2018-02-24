<div class="row">
    <!--商品名称-->
    <div class="col-sm-5">
     <?= $form->field($model, 'goods_name')->textInput(['maxlength' => true]) ?>
    </div>
    <!--  商品货号-->
    <div class="col-sm-5">
       <?= $form->field($model, 'goods_sn')->textInput(['maxlength' => true]) ?>
    </div>
</div>

<div class="row">
    <!--商品样式-->
    <div class="col-sm-5">
      <?= $form->field($model, 'goods_name_style')->textInput(['maxlength' => true]) ?>
    </div>
    <!--商品分类-->
    <div class="col-sm-5">

        <?= $form->field($model, 'cat_id')->textInput() ?>
    </div>
</div>

<div class="row">
    <!--商品品牌-->
    <div class="col-sm-5">
        <?= $form->field($model, 'brand_id')->textInput() ?>
     </div>
    <!--供货商-->
    <div class="col-sm-5">
       <?= $form->field($model, 'provider_name')->textInput(['maxlength' => true]) ?>
    </div>
</div>


<div class="row">
    <!-- 本店售价-->
    <div class="col-sm-5">
         <?= $form->field($model, 'shop_price')->textInput(['maxlength' => true]) ?>
     </div>
    <!--市场售价-->
    <div class="col-sm-5">
       <?= $form->field($model, 'market_price')->textInput(['maxlength' => true]) ?>
    </div>
</div>

<div class="row">
    <!--促销价-->
    <div class="col-sm-5">
         <?= $form->field($model, 'promote_price')->textInput(['maxlength' => true]) ?>
     </div>
    <!--促销日期开始-->
    <div class="col-sm-3">
        <?= $form->field($model, 'promote_start_date')->textInput(['maxlength' => true]) ?>
    </div>
    <!--促销日期结束-->
    <div class="col-sm-3">
        <?= $form->field($model, 'promote_end_date')->textInput(['maxlength' => true]) ?>
    </div>
</div>

<div class="row">
    <!--商品图片-->
    <div class="col-sm-5">
      <?= $form->field($model, 'goods_img')->textInput(['maxlength' => true]) ?>
    </div>
    <!--商品缩略图-->
    <div class="col-sm-5">
       <?= $form->field($model, 'goods_thumb')->textInput(['maxlength' => true]) ?>
    </div>
</div>

<?=\yii\helpers\Html::submitButton('提交',['class'=>'btn btn-success'])?>

