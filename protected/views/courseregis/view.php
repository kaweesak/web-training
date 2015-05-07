<?php
$this->breadcrumbs=array(
	'Courseregises'=>array('index'),
	$model->registerid,
);

$this->menu=array(
array('label'=>'List Courseregis','url'=>array('index')),
array('label'=>'Create Courseregis','url'=>array('create')),
array('label'=>'Update Courseregis','url'=>array('update','id'=>$model->registerid)),
array('label'=>'Delete Courseregis','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->registerid),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Courseregis','url'=>array('admin')),
);
?>

<h1>View Courseregis #<?php echo $model->registerid; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'registerid',
		'copenid',
		'course_id',
		'stucode',
		'fname',
		'lname',
		'faculity',
		'major',
		'address',
		'phone',
		'score',
		'status',
		'created',
),
)); ?>
