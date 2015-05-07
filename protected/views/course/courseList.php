<?php
$this->breadcrumbs=array(
	'Courses',
);
?>

<h3>หลักสูตรอบรม</h3>

<?php $this->widget('booster.widgets.TbListView',array(
    'dataProvider'=>$model,
    'itemView'=>'_courseList',
    'summaryText'=>false, 
)); 
