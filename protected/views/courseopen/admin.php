<?php
$this->breadcrumbs=array(
	'Courseopens'=>array('index'),
	'Manage',
);

$this->menu=array(
//array('label'=>'List Courseopen','url'=>array('index')),
array('label'=>'Create','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('courseopen-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h3>เปิดคอร์สเรียน</h3>


<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'courseopen-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'copenid',
                array(
    'name'=>'Course',
    'value'=>'$data->mycourse->course_name',
    'filter' => CHtml::activeTextField($model, 'course_name',array('class'=>'form-control')), //relation
             
), 
		'opendate',
		'recive',
		'status',
		'teacher_id',
		/*
		'created',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
