<?php
$this->breadcrumbs=array(
	'Room Reservs'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List RoomReserv','url'=>array('index')),
array('label'=>'Manage RoomReserv','url'=>array('admin')),
);
?>

<h1>Create RoomReserv</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>