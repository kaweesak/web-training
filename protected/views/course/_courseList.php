<div class="view">
   <div class="row">
        <div class="col-lg-12">
        <div class="media">
            <a class="pull-left" href="#">
                <img src="<?php echo Yii::app()->baseURL;?>/images/course/<?php echo CHtml::encode($data->img); ?> "  height="100" width="100" alt=""/>
            </a>
            <div class="media-body">
                <h4 class="media-heading"><?php echo CHtml::encode($data->course_name); ?> (<?php echo CHtml::encode($data->duration); ?> ชั่วโมง)</h4>
                <?php echo CHtml::encode($data->description); ?>           
            </div>
            <div class="navbar-form navbar-left">
                <?php echo CHtml::link('รายละเอียด',array('view','id'=>$data->course_id),array('type'=>'button','class'=>'btn btn-success btn-xs')); ?>
            </div>     
        </div>
            <hr>
        </div>
    
    </div> <!--end row-->

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img')); ?>:</b>
	<?php echo CHtml::encode($data->img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	*/ ?>

</div>
