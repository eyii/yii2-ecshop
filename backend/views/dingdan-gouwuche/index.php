<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\guanli_dingdan\CartSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Cart Models');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Cart Model'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rec_id',
            'user_id',
            'session_id',
            'goods_id',
            'goods_sn',
            // 'product_id',
            // 'goods_name',
            // 'market_price',
            // 'goods_price',
            // 'goods_number',
            // 'goods_attr:ntext',
            // 'is_real',
            // 'extension_code',
            // 'parent_id',
            // 'rec_type',
            // 'is_gift',
            // 'is_shipping',
            // 'can_handsel',
            // 'goods_attr_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
