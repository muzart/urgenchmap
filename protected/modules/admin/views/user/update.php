<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Administratorlar'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Yangilash',
);

$this->menu=array(
    array('label'=>'Administratorlar ro\'yhati', 'url'=>array('index')),
    array('label'=>'yangi Administrator', 'url'=>array('create')),
    array('label'=>'ma\'lumotlar', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'O\'chirish', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Ishonchingiz komilmi?')),
    array('label'=>'Boshqaruv', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->id; ?>-administrator ma'lumotlarini yangilash</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>