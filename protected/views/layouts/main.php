<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/app.css">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/angular/angular.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/main.js"></script>
    <title><?php echo $this->pageTitle;?></title>
</head>
<body data-ng-app="mapsApp">
    <?php echo $content;?>
</body>
</html>