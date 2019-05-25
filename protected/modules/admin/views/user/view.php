<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Administratorlar'=>array('index'),
	$model->login,
);

$this->menu=array(
	array('label'=>'Administratorlar ro\'yhati', 'url'=>array('index')),
	array('label'=>'Yangi Administrator', 'url'=>array('create')),
	array('label'=>'Yangilash', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'O\'chirish', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Ishonchingiz komilmi?')),
	array('label'=>'Boshqaruv', 'url'=>array('admin')),
);
?>

<h1> #<?php echo $model->login; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'login',
		'password',
		'role',
	),
)); ?>
