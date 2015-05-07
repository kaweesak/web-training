<?php
$this->breadcrumbs=array(
	'Courseregises'=>array('index'),
	$model->registerid=>array('view','id'=>$model->registerid),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Courseregis','url'=>array('index')),
	array('label'=>'Create Courseregis','url'=>array('create')),
	array('label'=>'View Courseregis','url'=>array('view','id'=>$model->registerid)),
	array('label'=>'Manage Courseregis','url'=>array('admin')),
	);
	?>

	<h1>Update Courseregis <?php echo $model->registerid; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>