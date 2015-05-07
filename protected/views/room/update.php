<?php
$this->breadcrumbs=array(
	'Rooms'=>array('index'),
	$model->roomid=>array('view','id'=>$model->roomid),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Room','url'=>array('index')),
	array('label'=>'Create Room','url'=>array('create')),
	array('label'=>'View Room','url'=>array('view','id'=>$model->roomid)),
	array('label'=>'Manage Room','url'=>array('admin')),
	);
	?>

	<h1>Update Room <?php echo $model->roomid; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>