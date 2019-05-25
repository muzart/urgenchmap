<?php
/* @var $this PlaceController */
/* @var $model Place */

$this->breadcrumbs=array(
	'Joylar'=>array('index'),
	$model->name,
);

$this->menu=array(
//	array('label'=>'Joylar ro\'yhati', 'url'=>array('index')),
	array('label'=>'Yangi joy', 'url'=>array('create')),
	array('label'=>'Yangilash', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'O\'chirish', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Ishonchingiz komilmi?')),
	array('label'=>'Boshqaruv', 'url'=>array('admin')),
);
?>

<h1> #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'longitude',
		'latitude',
		'address',
        array(
            'name'=>'category_id',
            'value'=>$model->category->name
        ),
	),
)); ?>
