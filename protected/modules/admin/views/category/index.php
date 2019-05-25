<?php
/* @var $this CategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kategoriyalar',
);

$this->menu=array(
	array('label'=>'Yangi kategoriya', 'url'=>array('create')),
	array('label'=>'Boshqaruv', 'url'=>array('admin')),
);
?>

<h1>Kategoriyalar</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
