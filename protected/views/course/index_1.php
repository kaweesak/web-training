<?php
$this->breadcrumbs=array(
	'Courses',
);

$this->menu=array(
array('label'=>'Create Course','url'=>array('create')),
array('label'=>'Manage Course','url'=>array('admin')),
);
?>

<h3>หลักสูตรอบรม</h3>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

<?php
foreach($dataProvider->getData() as $data){
    echo '<div class="row">';
        echo '<div class="media">';
        echo '<a class="pull-left" href="#">';
        echo '<img src="Content/img/100x80.gif"  height="100" width="80" alt=""/> </a>';
        echo '<div class="media-body">';
        echo ' <h4 class="media-heading">';
        echo CHtml::encode($data->course_name); 
        echo '(';
        echo CHtml::encode($data->duration); 
        echo ')</h4>';
        echo 'ศึกษาการสร้างฐานข้อมูล Access การนำเข้าข้อมูล และการแสดงผล การออกแบบและการสร้างข้อมูลการหาคำตอบจากคำถามที่ซับซ้อน การใช้พารามิเตอร์ การสร้างรายงานและการใช้มาโครเบื้องต้น';           
        echo '</div>';
        echo '<div class="navbar-form navbar-left">';
        echo CHtml::link('รายละเอียด',array('view','id'=>$data->course_id),array('type'=>'button','class'=>'btn btn-success btn-xs')); 
        echo '</div>';     
        echo '</div>';
        echo '<hr>';
    echo '</div>'; 
    //echo $data->course_name . '<br>';
}
?>