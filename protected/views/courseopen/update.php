<?php
$this->breadcrumbs=array(
	'Courseopens'=>array('index'),
	$model->copenid=>array('view','id'=>$model->copenid),
	'Update',
);

	$this->menu=array(
	//array('label'=>'List Courseopen','url'=>array('index')),
	//array('label'=>'Create Courseopen','url'=>array('create')),
	//array('label'=>'View Courseopen','url'=>array('view','id'=>$model->copenid)),
	array('label'=>'Manage','url'=>array('admin')),
	);
	?>

	<h1>Update <?php echo $model->copenid; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>