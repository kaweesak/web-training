<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->userid,
);

$this->menu=array(
array('label'=>'List Users','url'=>array('index')),
array('label'=>'Create Users','url'=>array('create')),
array('label'=>'Update Users','url'=>array('update','id'=>$model->userid)),
array('label'=>'Delete Users','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->userid),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Users','url'=>array('admin')),
);
?>

<h1>View Users #<?php echo $model->userid; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'userid',
		'fname',
		'lname',
		'username',
		'password',
		'user_permiss',
),
)); ?>
