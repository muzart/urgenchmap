<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Kategoriyalar'=>array('index'),
	'Boshqaruv',
);

$this->menu=array(
//    array('label'=>'Kategoriyalar', 'url'=>array('index')),
    array('label'=>'Yangi kategoriya', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#category-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Kategoriyalarni boshqarish</h1>

<?php echo CHtml::link('Kengaytirilgan qidiruv','#',array('class'=>'search-button btn btn-sm btn-warning')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        array(
            'name' => 'id',
            'header' => 'No.',
            'htmlOptions' => array('style' => 'width:80px'),
        ),
		'name',
		'places_count',
        array(
            'class' => 'zii.widgets.grid.CButtonColumn',
            'header'=>'Amallar',
            'htmlOptions' => array('style' => 'white-space: nowrap'),
            'afterDelete' => 'function(link,success,data) { if (success && data) alert(data); }',
            // 'template' => '{plus} {view} {update} {delete}',
            'buttons' => array(
                'view' => array(
                    'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Ko\'rish')),
                    'label' => '<i class="glyphicon glyphicon-eye-open"></i>',
                    'imageUrl' => '/images/view.png',
                ),
                'update' => array(
                    'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Tahrirlash')),
                    'label' => '<i class="glyphicon glyphicon-pencil"></i>',
                    'imageUrl' => '/images/update.png',
                ),
                'delete' => array(
                    'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'O\'chirish')),
                    'label' => '<i class="glyphicon glyphicon-remove"></i>',
                    'imageUrl' => '/images/delete.png',
                )
            )
        ),
	),
)); ?>
