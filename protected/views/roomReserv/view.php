<?php
$this->breadcrumbs=array(
	'Room Reservs'=>array('index'),
	$model->rid,
);

$this->menu=array(
array('label'=>'List RoomReserv','url'=>array('index')),
array('label'=>'Create RoomReserv','url'=>array('create')),
array('label'=>'Update RoomReserv','url'=>array('update','id'=>$model->rid)),
array('label'=>'Delete RoomReserv','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->rid),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage RoomReserv','url'=>array('admin')),
);
?>

<h1>View RoomReserv #<?php echo $model->rid; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'rid',
		'capacity',
		'usedate',
		'tel',
		'food_id',
		'server',
		'description',
		'status',
		'created',
),
)); ?>
