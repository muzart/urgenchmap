<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Administratorlar'=>array('index'),
	'Yangi',
);

$this->menu=array(
    array('label'=>'Administratorlar ro\'yhati', 'url'=>array('index')),
    array('label'=>'Boshqaruv', 'url'=>array('admin')),
);
?>

<h1>Yangi Administrator</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>