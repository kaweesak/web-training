<?php
$this->breadcrumbs=array(
	'Roomevents'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Roomevents','url'=>array('index')),
	array('label'=>'Create Roomevents','url'=>array('create')),
	array('label'=>'View Roomevents','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Roomevents','url'=>array('admin')),
	);
	?>

	<h1>Update Roomevents <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>