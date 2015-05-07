<?php
$this->breadcrumbs=array(
	'Courseregises'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Courseregis','url'=>array('index')),
array('label'=>'Manage Courseregis','url'=>array('admin')),
);
?>

<h1>Create Courseregis</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>