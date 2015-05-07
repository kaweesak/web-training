<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('copenid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->copenid),array('view','id'=>$data->copenid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('course_id')); ?>:</b>
	<?php echo CHtml::encode($data->mycourse->course_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opendate')); ?>:</b>
	<?php echo CHtml::encode($data->opendate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recive')); ?>:</b>
	<?php echo CHtml::encode($data->recive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teacher_id')); ?>:</b>
	<?php echo CHtml::encode($data->teacher_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />


</div>
