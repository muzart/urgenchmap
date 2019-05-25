<?php
/* @var $this PlaceController */
/* @var $model Place */

$this->breadcrumbs=array(
	'Joylar'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Yangilash',
);

$this->menu=array(
//    array('label'=>'Joylar ro\'yhati', 'url'=>array('index')),
    array('label'=>'Yangi joy', 'url'=>array('create')),
    array('label'=>'Ko\'rish', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Boshqaruv', 'url'=>array('admin')),
);
?>

<h1> "<?php echo $model->name; ?>"ni yangilash</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>