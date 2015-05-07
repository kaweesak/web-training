<div class="view">
    <div class="row">
        <div class="col-lg-12">
        <div class="media">
            <a class="pull-left" href="#">
                <img src="http://placehold.it/100x80"  height="100" width="80" alt=""/>
            </a>
            <div class="media-body">
                <h4 class="media-heading"><?php echo CHtml::encode($data->course_name); ?> (<?php echo CHtml::encode($data->duration); ?>)</h4>
                ศึกษาการสร้างฐานข้อมูล Access การนำเข้าข้อมูล และการแสดงผล การออกแบบและการสร้างข้อมูลการหาคำตอบจากคำถามที่ซับซ้อน การใช้พารามิเตอร์ การสร้างรายงานและการใช้มาโครเบื้องต้น           
            </div>
            <div class="navbar-form navbar-left">
                <?php echo CHtml::link('รายละเอียด',array('view','id'=>$data->course_id),array('type'=>'button','class'=>'btn btn-success btn-xs')); ?>
            </div>     
        </div>
            <hr>
        </div>
    
    </div> <!--end row-->

	

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	*/ ?>

</div>
