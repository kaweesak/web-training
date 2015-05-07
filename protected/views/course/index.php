<?php
$this->breadcrumbs=array(
	'Courses',
);
?>

<h3>หลักสูตรอบรม</h3>

<?php $this->widget('booster.widgets.TbListView',array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'summaryText'=>false, 
)); 
?>
