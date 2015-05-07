<?php

$this->breadcrumbs=array(
	'Courses'=>array('courseList'),
	
);
?>

<h3>ลงทะเบียน</h3>



<div class="panel panel-info" >
    <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-plus" aria-hidden="true" href="#"></span> <?php echo $model->course_name;?> </h3>
    </div>  
</div>

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'courseregis-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model2); ?>

	<?php echo $form->textFieldGroup($model2,'fname',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model2,'lname',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>255)))); ?>

<?php echo $form->textFieldGroup($model2,'stucode',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>20)))); ?>

	<?php echo $form->textFieldGroup($model2,'faculity',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model2,'major',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model2,'address',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model2,'phone',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>20)))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model2->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
