<?php
/* @var $this yii\web\View */
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<?php
Modal::begin([
    'id' => 'common-modal',
    'header' => '<h4 class="modal-title">头部</h4>',
    'footer' =>  '<a href="#" class="btn btn-primary" data-dismiss="modal">底部关闭</a>',
]);


$actionSave = Url::toRoute('info/create');
$js = <<<JS
$("#account-changepwd").click(function(){ 
        //URL
        aUrl = $(this).attr('data-url');
         $('#common-modal').modal("show") .find(".modal-body").load(aUrl); 
          $.get('{$actionSave}', {},
            function (data) {
                $('.modal-body').html(data);
            }  
        );
        return false;
   }); 

JS;
$this->registerJs($js);

Modal::end();

echo Html::a('修改密码', '/account/changepwd', [
    'id' => 'account-changepwd',
    'class' => 'btn btn-success',
    'data-toggle' => 'modal',
    'data-url' => Url::toRoute(['/account/changepwd']),
    'data-title' => '修改密码',
    'data-target' => '#common-modal',
])

/*  'data-toggle' => 'modal',*/
?>