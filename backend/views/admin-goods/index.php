<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\GoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '商品列表');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', '添加新商品'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a("批量删除", "javascript:void(0);", ["class" => "btn btn-success gridview"]) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        "options" => [
            // ...其他设置项
            "id" => "grid",
            "style"=>"overflow:auto",
        ],
        'columns' => [
            [
                "class" => "yii\grid\CheckboxColumn",
                "name" => "goods_id",
            ],
            ['class' => 'yii\grid\SerialColumn'],

            'goods_id',
        //    'cat_id',
            'goods_sn',
            'goods_name',
        //    'goods_name_style',
            // 'click_count',
    //      'brand_id',
       //   'provider_name',
           'goods_number',
            // 'goods_weight',
         //    'market_price',
             'shop_price',
          //  'promote_price',
            // 'promote_start_date',
            // 'promote_end_date',
            // 'warn_number',
            // 'keywords',
            // 'goods_brief',
            // 'goods_desc:ntext',
            // 'goods_thumb',
            // 'goods_img',
            // 'original_img',
            'is_real',
            // 'extension_code',
             'is_on_sale',
            'is_alone_sale',
     //     'is_shipping',
            // 'integral',
            // 'add_time',
            'sort_order',
          //  'is_delete',
           'is_best',
             'is_new',
            'is_hot',
         //  'is_promote',
            // 'bonus_type_id',
            // 'last_update',
            // 'goods_type',
            // 'seller_note',
            // 'give_integral',
            // 'rank_integral',
            // 'suppliers_id',
           // 'is_check',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

<?php Pjax::end(); ?></div>
