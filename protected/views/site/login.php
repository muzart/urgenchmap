<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h1 class="text-center">Login</h1>

            <div class="form">
                <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'login-form',
                    'enableClientValidation'=>true,
                    'clientOptions'=>array(
                        'validateOnSubmit'=>true,
                    ),
                )); ?>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><?php echo $form->labelEx($model,'username'); ?></div>
                        <?php echo $form->textField($model,'username',array('class'=>'form-control')); ?>
                        <?php echo $form->error($model,'username'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><?php echo $form->labelEx($model,'password'); ?></div>
                        <?php echo $form->passwordField($model,'password',array('class'=>'form-control')); ?>
                        <?php echo $form->error($model,'password'); ?>
                        </div>
                </div>

                <div class="form-group rememberMe">
                    <?php echo $form->checkBox($model,'rememberMe'); ?>
                    <?php echo $form->label($model,'rememberMe'); ?>
                    <?php echo $form->error($model,'rememberMe'); ?>
                </div>

                <div class="buttons">
                    <?php echo CHtml::submitButton('Login',array('class'=>'btn btn-primary btn-block')); ?>
                </div>

                <?php $this->endWidget(); ?>
            </div><!-- form -->
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
