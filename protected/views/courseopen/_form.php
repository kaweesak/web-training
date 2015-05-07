<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'courseopen-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListGroup($model,'course_id',array('widgetOptions'=>array('data'=> Course::getDropdown(),'htmlOptions'=>array()))); ?>

	<?php echo $form->textFieldGroup($model,'opendate',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model,'recive',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>10)))); ?>

    <?php echo $form->textFieldGroup($model,'teacher_id',array('widgetOptions'=>array('htmlOptions'=>array()))); ?>

	<?php echo $form->dropDownListGroup($model,'status', array('widgetOptions'=>array('data'=>array("Close"=>"Close","Open"=>"Open",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

	

	

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
