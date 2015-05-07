<?php
$this->breadcrumbs=array(
	'Roomevents'=>array('index'),
	$model->title,
);

$this->menu=array(
array('label'=>'List Roomevents','url'=>array('index')),
array('label'=>'Create Roomevents','url'=>array('create')),
array('label'=>'Update Roomevents','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Roomevents','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Roomevents','url'=>array('admin')),
);
?>

<h1>View Roomevents #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'title',
		'roomid',
		'start',
		'finish',
		'note',
		'is_allday',
		'created',
),
)); ?>
