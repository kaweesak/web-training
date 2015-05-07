<div class="view">
    <div class="row">
        <div class="media">
            <a class="pull-left" href="#">
                <img src="Content/img/100x80.gif"  height="100" width="80" alt=""/>
            </a>
            <div class="media-body">
                <h4 class="media-heading"><?php echo CHtml::encode($data->course_name); ?> (<?php echo CHtml::encode($data->duration); ?>)</h4>
                ศึกษาการสร้างฐานข้อมูล Access การนำเข้าข้อมูล และการแสดงผล การออกแบบและการสร้างข้อมูลการหาคำตอบจากคำถามที่ซับซ้อน การใช้พารามิเตอร์ การสร้างรายงานและการใช้มาโครเบื้องต้น           
            </div>
            <div class="navbar-form navbar-left">                        
                <a type="button" class="btn btn-success btn-xs" href="#"><font color="#ffffff">รายละเอียด</font></a>
                <?php echo CHtml::link('รายละเอียด',array('view','id'=>$data->course_id),array('type'=>'button','class'=>'btn btn-success btn-xs')); ?>
            </div>     
        </div>
                <hr>
    </div> <!--end row-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('course_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->course_id),array('view','id'=>$data->course_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('course_name')); ?>:</b>
	<?php echo CHtml::encode($data->course_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('course_detail')); ?>:</b>
	<?php echo CHtml::encode($data->course_detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duration')); ?>:</b>
	<?php echo CHtml::encode($data->duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	*/ ?>

</div>
