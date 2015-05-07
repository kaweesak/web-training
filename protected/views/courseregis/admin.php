<?php
$this->breadcrumbs=array(
	'Courseregises'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Courseregis','url'=>array('index')),
array('label'=>'Create Courseregis','url'=>array('create')),
);

?>

<h3>จัดการข้อมูลการสมัคร</h3>


<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'courseregis-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'registerid',
		'copenid',
		'course_id',
		'stucode',
		'fname',
		'lname',
		/*
		'faculity',
		'major',
		'address',
		'phone',
		'score',
		'status',
		'created',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
