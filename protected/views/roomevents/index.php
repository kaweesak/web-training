<?php
$this->breadcrumbs=array(
	'Roomevents',
);

$this->menu=array(
array('label'=>'Create Roomevents','url'=>array('create')),
array('label'=>'Manage Roomevents','url'=>array('admin')),
);
?>

<h1>Roomevents</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
