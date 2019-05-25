<?php
/* @var $this PlaceController */
/* @var $model Place */

$this->breadcrumbs=array(
	'Joylar'=>array('index'),
	'Boshqaruv',
);


$this->menu=array(
//    array('label'=>'Joylar ro\'yhati', 'url'=>array('index')),
    array('label'=>'Yangi joy', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#place-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Joylar ma'lumotlarini boshqarish</h1>

<?php echo CHtml::link('Kengaytirilgan qidiruv','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'place-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'description',
//		'longitude',
//		'latitude',
		'address',
        array(
            'name'=>'category_id',
            'value'=>'$data->category->name',
            'filter'=>CHtml::dropDownList(
                    'Places[category_id]',
                    $model->search()->model->attributes['category_id'],
                    array(''=>'')+Category::getAll())
        ),
		/*
		'category_id',
		*/
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
