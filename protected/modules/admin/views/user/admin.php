<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Administratorlar'=>array('index'),
	'Boshqaruv',
);

$this->menu=array(
    array('label'=>'Administratorlar ro\'yhati', 'url'=>array('index')),
    array('label'=>'Yangi Administrator', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administratorlar ma'lumotlarini boshqarish</h1>

<?php echo CHtml::link('Kengaytrilgan qidiruv','#',array('class'=>'search-button btn btn-sm btn-warning')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'login',
		'password',
		'role',
        array(
            'class' => 'zii.widgets.grid.CButtonColumn',
            'header'=>'Amallar',
            'htmlOptions' => array('style' => 'white-space: nowrap'),
            'afterDelete' => 'function(link,success,data) { if (success && data) alert(data); }',
            // 'template' => '{plus} {view} {update} {delete}',
            'buttons' => array(
                'view' => array(
                    'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Ko\'rish')),
                    'label' => '<i class="glyphicon glyphicon-eye-open"></i>',
                    'imageUrl' => '/images/view.png',
                ),
                'update' => array(
                    'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Tahrirlash')),
                    'label' => '<i class="glyphicon glyphicon-pencil"></i>',
                    'imageUrl' => '/images/update.png',
                ),
                'delete' => array(
                    'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'O\'chirish')),
                    'label' => '<i class="glyphicon glyphicon-remove"></i>',
                    'imageUrl' => '/images/delete.png',
                )
            )
        ),
	),
)); ?>
