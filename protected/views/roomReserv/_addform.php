<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'room-reserv-form',   
	'enableAjaxValidation'=>false,		
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'capacity',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>10)))); ?>

	<?php echo $form->textFieldGroup($model,'usedate',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model,'tel',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>20)))); ?>

	<?php echo $form->textFieldGroup($model,'food_id',array('widgetOptions'=>array('htmlOptions'=>array()))); ?>

	<?php echo $form->dropDownListGroup($model,'server', array('widgetOptions'=>array('data'=>array("no"=>"no","yes"=>"yes",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

	<?php echo $form->textAreaGroup($model,'description', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50)))); ?>

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
			'label'=>$model->isNewRecord ? 'จองห้อง' : 'บันทึก',
		)); ?>
</div>

<?php $this->endWidget(); ?>
