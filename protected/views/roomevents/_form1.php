<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'roomevents-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'title',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model,'room',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>255)))); ?>

	<?php echo $form->datePickerGroup($model,'start',array(
            'widgetOptions'=>array(
                'options'=>array(
                    'autoclose'=>TRUE,
                    'format'=>'yyyy-mm-dd',
                    'startDate'=>date('Y-m-d'),
                    'minDate'=>date('Y-m-d'),
                    'language'=>'th',
                    ),
                'htmlOptions'=>array(
                    'readonly'=>true,
                )
                ),
            )); ?>
	<?php echo $form->datePickerGroup($model,'finish',array(
            'widgetOptions'=>array(
                'options'=>array(
                    'autoclose'=>TRUE,
                    'format'=>'yyyy-mm-dd',
                    'startDate'=>date('Y-m-d'),
                    'minDate'=>date('Y-m-d'),
                    'language'=>'th',
                    ),
                'htmlOptions'=>array(
                    'readonly'=>true,
                )
                ),
            )); ?>

	<?php echo $form->textFieldGroup($model,'note',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model,'is_allday',array('widgetOptions'=>array('htmlOptions'=>array()))); ?>

	<?php //echo $form->textFieldGroup($model,'created',array('widgetOptions'=>array('htmlOptions'=>array()))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
