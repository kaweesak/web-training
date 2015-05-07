<?php
$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->news_id,
);

$this->menu=array(
array('label'=>'List News','url'=>array('index')),
array('label'=>'Create News','url'=>array('create')),
array('label'=>'Update News','url'=>array('update','id'=>$model->news_id)),
array('label'=>'Delete News','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->news_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage News','url'=>array('admin')),
);
?>

<h1>View News #<?php echo $model->news_id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'news_id',
		'news_mem_id',
		'news_topic',
		'news_detail',
		'news_create_date',
		'news_update_date',
		'news_status',
),
)); ?>
