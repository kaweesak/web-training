<?php
$this->breadcrumbs=array(
	'Room Reservs',
);

$this->menu=array(
array('label'=>'Create RoomReserv','url'=>array('create')),
array('label'=>'Manage RoomReserv','url'=>array('admin')),
);
?>

<h1>Room Reservs</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
