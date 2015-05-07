<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('news_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->news_id),array('view','id'=>$data->news_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_mem_id')); ?>:</b>
	<?php echo CHtml::encode($data->news_mem_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_topic')); ?>:</b>
	<?php echo CHtml::encode($data->news_topic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_detail')); ?>:</b>
	<?php echo CHtml::encode($data->news_detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_create_date')); ?>:</b>
	<?php echo CHtml::encode($data->news_create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_update_date')); ?>:</b>
	<?php echo CHtml::encode($data->news_update_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_status')); ?>:</b>
	<?php echo CHtml::encode($data->news_status); ?>
	<br />


</div>
