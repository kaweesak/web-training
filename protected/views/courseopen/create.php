<?php
$this->breadcrumbs=array(
	'Courseopens'=>array('index'),
	'Create',
);

$this->menu=array(
//array('label'=>'List Courseopen','url'=>array('index')),
array('label'=>'Manage','url'=>array('admin')),
);
?>

<h1>Create</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>