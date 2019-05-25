<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Kategoriyalar'=>array('index'),
	'Yangi kategoriya',
);

$this->menu=array(
//    array('label'=>'Kategoriyalar', 'url'=>array('index')),
    array('label'=>'Boshqaruv', 'url'=>array('admin')),
);
?>

<h1>Yangi kategoriya</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>