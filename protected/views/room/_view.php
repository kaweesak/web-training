<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('roomid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->roomid),array('view','id'=>$data->roomid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roomname')); ?>:</b>
	<?php echo CHtml::encode($data->roomname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capacity')); ?>:</b>
	<?php echo CHtml::encode($data->capacity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
	<?php echo CHtml::encode($data->color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img')); ?>:</b>
	<?php echo CHtml::encode($data->img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />


</div>
