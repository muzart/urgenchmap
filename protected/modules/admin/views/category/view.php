<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Kategoriyalar'=>array('index'),
	$model->name,
);

$this->menu=array(
//	array('label'=>'Kategoriyalar', 'url'=>array('index')),
	array('label'=>'Yangi kategoriya', 'url'=>array('create')),
	array('label'=>'Yangilash', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'O\'chirish', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Ishonchingiz komilmi?')),
	array('label'=>'Boshqaruv', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>

<h2>Kategoriyaga tegishli joylar</h2>

<?php
//      var_dump($dataProvider->getData());exit;
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'places-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'name',
        'description',
        'latitude',
        'longitude',
//        array(
//            'class' => 'CButtonColumn',
//            'header'=>'Amallar',
//            'htmlOptions' => array('style' => 'white-space: nowrap'),
//            'afterDelete' => 'function(link,success,data) { if (success && data) alert(data); }',
//            'template' => '{view}',
//            'buttons' => array(
//                'view' => array(
//                    'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Ko\'rish')),
//                    'imageUrl' => '/images/view.png',
//                ),
//            )
//        ),
    ),
));
?>
