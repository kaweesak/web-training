<?php
$this->breadcrumbs=array(
	'Courseopens'=>array('index'),
	$model->copenid,
);

$this->menu=array(
//array('label'=>'List Courseopen','url'=>array('index')),
//array('label'=>'Create Courseopen','url'=>array('create')),
//array('label'=>'Update Courseopen','url'=>array('update','id'=>$model->copenid)),
//array('label'=>'Delete Courseopen','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->copenid),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage','url'=>array('admin')),
);
?>

<h1>View Courseopen #<?php echo $model->copenid; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'copenid',
		'course_id',
		'opendate',
		'recive',
		'status',
		'teacher_id',
		'created',
),
)); ?>
