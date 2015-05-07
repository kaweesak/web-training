<?php
$this->breadcrumbs=array(
	'Courseregises',
);

$this->menu=array(
array('label'=>'Create Courseregis','url'=>array('create')),
array('label'=>'Manage Courseregis','url'=>array('admin')),
);
?>

<h1>Courseregises</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
