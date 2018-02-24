<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\guanli_dingdan\FahuodanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Fahuodan Models');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fahuodan-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Fahuodan Model'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'delivery_id',
            'delivery_sn',
            'order_sn',
            'order_id',
            'invoice_no',
            // 'add_time',
            // 'shipping_id',
            // 'shipping_name',
            // 'user_id',
            // 'action_user',
            // 'consignee',
            // 'address',
            // 'country',
            // 'province',
            // 'city',
            // 'district',
            // 'sign_building',
            // 'email:email',
            // 'zipcode',
            // 'tel',
            // 'mobile',
            // 'best_time',
            // 'postscript',
            // 'how_oos',
            // 'insure_fee',
            // 'shipping_fee',
            // 'update_time',
            // 'suppliers_id',
            // 'status',
            // 'agency_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
