<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'administratorlar',
);

$this->menu=array(
    array('label'=>'Yangi Administrator', 'url'=>array('create')),
    array('label'=>'Boshqaruv', 'url'=>array('admin')),
);
?>

<h1>Administratorlar</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
