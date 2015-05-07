<?php
$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->course_id,
);

$this->menu=array(
array('label'=>'List Course','url'=>array('index')),
array('label'=>'Create Course','url'=>array('create')),
array('label'=>'Update Course','url'=>array('update','id'=>$model->course_id)),
array('label'=>'Delete Course','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->course_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Course','url'=>array('admin')),
);
?>

<div class="row">
    <div class="col-lg-12">
    <div class="bs-callout bs-callout-success">
        <h4><strong><a href="#"><?php echo $model->course_name; ?></a> </strong></h4>
        <hr>
        <h4>รายละเอียด</h4>
        <?php echo $model->description; ?>
         <hr>
         <?php echo $model->course_detail; ?>
        <div class="row">
           <?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'course_id',
		'course_name',
		'category_id',
		'description',
		'course_detail',
		'duration',
		'price',
		'status',
		'img',
		'created',
),
)); ?> 
        </div>
    </div>
       
    </div>
</div>



