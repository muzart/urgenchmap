<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyB_trfirvXN38poa9Sf2FaXv8BeIxPG2Vo"></script>
    <script src="/js/angular/angular.min.js"></script>
    <script src="/js/main.js"></script>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/common.css">
</head>

<body data-ng-app="mapsApp">

<div class="container-fluid" id="page">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <nav class="navbar navbar-default top-navbar" role="navigation">
                <a href="/" class="navbar-brand"><?php echo CHtml::encode(Yii::app()->name); ?></a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex-collapse">
                        <span class="sr-only">Expand the menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-ex-collapse">
                    <?php $this->widget('zii.widgets.CMenu',array(
                        'items'=>array(
                            array('label'=>'Admin', 'url'=>array('/admin/default')),
                            array('label'=>'Joylar', 'url'=>array('/admin/place')),
                            array('label'=>'Kategoriyalar', 'url'=>array('/admin/category')),
                            array('label'=>'Administratorlar', 'url'=>array('/admin/user')),
                            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                        ),
                        'activeCssClass' => 'active',
                        'htmlOptions'=>array('class'=>'nav navbar-nav')
                    )); ?>
               </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <?php if(isset($this->breadcrumbs)):?>
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
			        'links'=>$this->breadcrumbs,
			        'htmlOptions'=>array ('class'=>'breadcrumb')
		        )); ?><!-- breadcrumbs -->
            <?php endif?>

            <?php echo $content; ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div id="footer" class="well text-center">
                Copyright &copy; <?php echo date('Y'); ?> TUIT UB.<br/>
                <?php echo Yii::powered(); ?>
            </div><!-- footer -->
        </div>
    </div>

</div><!-- page -->

</body>
</html>
