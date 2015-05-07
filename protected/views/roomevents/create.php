<?php
$this->breadcrumbs=array(
	'Roomevents'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Roomevents','url'=>array('index')),
array('label'=>'Manage Roomevents','url'=>array('admin')),
);
?>

<h3>บันทึกข้อมูลการใช้ห้อง</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>