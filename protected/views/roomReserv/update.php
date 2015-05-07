<?php
$this->breadcrumbs=array(
	'Room Reservs'=>array('index'),
	$model->rid=>array('view','id'=>$model->rid),
	'Update',
);

	$this->menu=array(
	array('label'=>'List RoomReserv','url'=>array('index')),
	array('label'=>'Create RoomReserv','url'=>array('create')),
	array('label'=>'View RoomReserv','url'=>array('view','id'=>$model->rid)),
	array('label'=>'Manage RoomReserv','url'=>array('admin')),
	);
	?>

	<h1>Update RoomReserv <?php echo $model->rid; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>