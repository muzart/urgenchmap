<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Kategoriyalar'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Yangilash',
);

$this->menu=array(
//    array('label'=>'Kategoriyalar', 'url'=>array('index')),
    array('label'=>'Yangi kategoriya', 'url'=>array('create')),
	array('label'=>'Ko\'rish', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Boshqaruv', 'url'=>array('admin')),
);
?>

<h1> <?php echo $model->id; ?>-kategoriyani yangilash</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>