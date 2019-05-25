<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>
<div class="jumbotron">
    <h1>Xush kelibsiz, <?php echo ucfirst(Yii::app()->user->name);?>!</h1>
    <h2><?php echo Yii::app()->name;?> administrator sahifasi</h2>
    <p class="text-primary">Ushbu sahifa orqali siz
    <?php echo CHtml::link('Kategoriyalar','/admin/category',array('class'=>'btn btn-sm btn-danger'));?> ,
    <?php echo CHtml::link('Joylar','/admin/place',array('class'=>'btn btn-sm btn-warning'));?> va
    <?php echo CHtml::link('Administratorlar','/admin/place',array('class'=>'btn btn-sm btn-success'));?> ni
        qo'shish, tahrirlash, o'chirish va boshqarishni amalga oshirishingiz mumkin!</p>
    <div class="row">
        <div class="col-sm-4">

            <ul class="list-group">
                <li class="list-group-item list-group-item-heading list-group-item-danger"><h3>Kategoriyalar</h3></li>
                <li class="list-group-item list-group-item-info"><?php echo CHtml::link('<i class="glyphicon glyphicon-plus"></i> Yangi kategoriya','/admin/category/create',array('class'=>'btn btn-sm btn-info'));?></li>
                <li class="list-group-item list-group-item-info"><?php echo CHtml::link('<i class="glyphicon glyphicon-cog"></i> Kategoriyalarni boshqarish','/admin/category/admin',array('class'=>'btn btn-sm btn-info'));?></li>
            </ul>
        </div>
        <div class="col-sm-4">
            <ul class="list-group">
                <li class="list-group-item list-group-item-heading list-group-item-warning"><h3>Joylar</h3></li>
                <li class="list-group-item list-group-item-info"><?php echo CHtml::link('<i class="glyphicon glyphicon-plus"></i> Yangi joy','/admin/place/create',array('class'=>'btn btn-sm btn-info'));?></li>
                <li class="list-group-item list-group-item-info"><?php echo CHtml::link('<i class="glyphicon glyphicon-cog"></i> Joylarni boshqarish','/admin/place/admin',array('class'=>'btn btn-sm btn-info'));?></li>
            </ul>
        </div>
        <div class="col-sm-4">
            <ul class="list-group">
                <li class="list-group-item list-group-item-heading list-group-item-success"><h3>Administratorlar</h3></li>
                <li class="list-group-item list-group-item-info"><?php echo CHtml::link('<i class="glyphicon glyphicon-plus"></i> Yangi administrator','/admin/place/create',array('class'=>'btn btn-sm btn-info'));?></li>
                <li class="list-group-item list-group-item-info"><?php echo CHtml::link('<i class="glyphicon glyphicon-cog"></i> Administratorlarni boshqarish','/admin/place/admin',array('class'=>'btn btn-sm btn-info'));?></li>
            </ul>
        </div>
    </div>
</div>