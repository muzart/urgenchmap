<?php
/* @var $this PlaceController */
/* @var $model Place */

$this->breadcrumbs=array(
	'Joylar'=>array('index'),
	'Yangi',
);
$this->menu=array(
//	array('label'=>'Joylar ro\'yhati', 'url'=>array('index')),
	array('label'=>'Boshqaruv', 'url'=>array('admin')),
);
?>

<h1>Yangi joy</h1>

<?php
$this->renderPartial('_form', array('model'=>$model));
?>