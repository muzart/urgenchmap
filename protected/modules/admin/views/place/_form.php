<?php
/* @var $this PlaceController */
/* @var $model Place */
/* @var $form CActiveForm */
?>
<div class="container-fluid" data-ng-controller="PlaceCtrl">
    <div class="row-fluid">
        <div class="col-sm-6">
            <div class="form">
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'place-form',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // There is a call to performAjaxValidation() commented in generated controller code.
                // See class documentation of CActiveForm for details on this.
                'enableAjaxValidation'=>false,
            )); ?>

                <?php echo $form->errorSummary($model); ?>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <?php echo $form->labelEx($model,'name'); ?>
                        </div>
                        <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
                    </div>
                    <?php echo $form->error($model,'name'); ?>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                    <?php echo $form->labelEx($model,'description'); ?>
                        </div>
                    <?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
                    </div>
                    <?php echo $form->error($model,'description'); ?>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                    <?php echo $form->labelEx($model,'longitude'); ?>
                        </div>
                    <?php echo $form->textField($model,'longitude',array('class'=>'form-control')); ?>
                    </div>
                    <?php echo $form->error($model,'longitude'); ?>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <?php echo $form->labelEx($model,'latitude'); ?>
                        </div>
                    <?php echo $form->textField($model,'latitude',array('class'=>'form-control')); ?>
                    </div>
                    <?php echo $form->error($model,'latitude'); ?>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                    <?php echo $form->labelEx($model,'address'); ?>
                        </div>
                    <?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
                    </div>
                    <?php echo $form->error($model,'address'); ?>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                    <?php echo $form->labelEx($model,'category_id'); ?>
                        </div>
                    <?php echo $form->dropDownList($model,'category_id',array(''=>'')+Category::getAll(),array('class'=>'form-control')); ?>
                    </div>
                    <?php echo $form->error($model,'category_id'); ?>
                </div>
                <?php if(!$model->isNewRecord):?>
                <input type="hidden" ng-init="showMarker()">
                <?php endif;?>
                <div class="buttons">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Saqlash' : 'Yangilash',array('class'=>'btn btn-primary')); ?>
                </div>

            <?php $this->endWidget(); ?>

            </div><!-- form -->
        </div>
        <div class="col-sm-6">
            <div <?php if($model->isNewRecord):?>data-ng-init="initialize()"<?php endif;?> id="map-canvas"></div>
        </div>
    </div>
</div>