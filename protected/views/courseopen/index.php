<?php
$this->breadcrumbs=array(
	'Courseopens',
);

$this->menu=array(
array('label'=>'Create','url'=>array('create')),
array('label'=>'Manage','url'=>array('admin')),
);
?>

<h1>Courseopens</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
