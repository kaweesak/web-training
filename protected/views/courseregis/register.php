<?php

$this->breadcrumbs=array(
	'Register'=>array('index'),
	
);
?>

<h3>ลงทะเบียน</h3>



<div class="panel panel-info" >
    <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-plus" aria-hidden="true" href="#"></span> <?php echo $model2->course_name;?> </h3>
    </div>  
</div>

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'courseregis-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'fname',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model,'lname',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>255)))); ?>

        <?php echo $form->textFieldGroup($model,'phone',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>20)))); ?>

        <?php echo $form->textFieldGroup($model,'stucode',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>20)))); ?>

	<?php echo $form->textFieldGroup($model,'faculity',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model,'major',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>255)))); ?>

	<?php echo $form->textAreaGroup($model,'address', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50)))); ?>

	<?php if(CCaptcha::checkRequirements()): ?>
<div class="row">
    <div class="col-lg-12">
    <?php echo $form->labelEx($model,'verifyCode'); ?>
    <div>
    <?php $this->widget('CCaptcha'); ?>
    <?php echo $form->textField($model,'verifyCode'); ?>
    </div>
    
    <?php echo $form->error($model,'verifyCode'); ?>
    </div>
</div>
<?php endif; ?>
<br>	

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'ลงทะเบียน' : 'บันทึก',
		)); ?>
</div>

<?php $this->endWidget(); ?>
