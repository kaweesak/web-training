<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	'Manage',
);

$this->menu=array(
//array('label'=>'List Category','url'=>array('index')),
array('label'=>'Create Category','url'=>array('create')),
);
?>


<h3>จัดการประเภทคอร์ส</h3>


<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'category-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'category_id',
		'category_name',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
