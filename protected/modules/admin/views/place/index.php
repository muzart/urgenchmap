<?php
/* @var $this PlaceController */
/* @var $dataProvider CActiveDataProvider */
/* ?key=AIzaSyB_trfirvXN38poa9Sf2FaXv8BeIxPG2Vo */

$this->breadcrumbs=array(
	'Joylar',
);

$this->menu=array(
    array('label'=>'Yangi joy', 'url'=>array('create')),
    array('label'=>'Boshqaruv', 'url'=>array('admin')),
);
?>
<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
)); ?>