<?php
$this->breadcrumbs=array(
	'News',
);

$this->menu=array(
array('label'=>'Create News','url'=>array('create')),
array('label'=>'Manage News','url'=>array('admin')),
);
?>

<h1>News</h1>

<?php //$this->widget('booster.widgets.TbListView',array('dataProvider'=>$dataProvider,'itemView'=>'_view',)); ?>

<div class="panel panel-info">
    <div class="panel-heading"><i class ="glyphicon glyphicon-plus"></i><B> ข่าว - ประชาสัมพันธ์</B> </div>

    <table class="table table-hover">
        <thead><tr>  </tr> </thead>

        <?php
        $list = Yii::app()->db->createCommand("select * FROM news")->query();

        foreach ($list as $ds) {
            ?>
            <tr> 

                <td>
                    <span class="label label-primary"> <?php echo $ds['news_create_date']; ?>  </span> &nbsp;&nbsp;                    
                    <strong> <a  href=" <?php echo $this->createUrl("News/View", array("id" => $ds['news_id'])); ?>"> <?php echo $ds['news_topic']; ?> </a> </strong>
                    <h6> <?php echo $ds['news_detail']; ?></h6>

                    <h6> 
                        โดย : <?php //echo $ds['name_full']; ?> &nbsp;&nbsp; 
                        วันอัพเดท : <?php echo $ds['news_update_date']; ?> &nbsp;&nbsp; 
                    </h6>
                </td>
                 <td> 
                        <?php if ((Yii::app()->session["member_permis"] == "Super Admin") && ( Yii::app()->session["member_status"] == "อนุมัติ")) { ?>
                            <a  href=" <?php echo $this->createUrl("News/Delete", array("id" => $ds['news_id'])); ?> " onclick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')" class="label label-danger pull-right">ลบ</a>
                        <?php } ?>
                    </td>
                    <td> 
                        <?php if ((Yii::app()->session["member_permis"] == "Super Admin") && ( Yii::app()->session["member_status"] == "อนุมัติ")) { ?>
                            <a  href=" <?php echo $this->createUrl("News/Edit", array("id" => $ds['news_id'])); ?>"  class="label label-warning pull-right">แก้ไข</a>
                        <?php } ?>
                    </td> 

            </tr>
              
            <?php
        }
        ?>    
    </table> 
</div>
