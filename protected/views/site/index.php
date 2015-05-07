<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div >
            <strong>

<!--                <img src="images/qr.jpg" width="30">-->

                ยินดีต้อนรับ.. 
<!--            <span class="glyphicon glyphicon-upload" aria-hidden="true"></span> -->
            </strong>
                        Online <a href="#"><span class="label label-danger">6</span></a>
            สมาชิก <a href="#"><span class="label label-danger">1,038</span></a> ท่าน   /  เข้าชม  <span class="label label-success">174,756</span> ครั้ง

            <span class="label label-info"><a href="https://www.facebook.com/groups/386716724753428/" target="_blank"><font color="#ffffff"> Facebook กลุ่ม :</font></a></span>
                   
</div>
    <br>
<?php $this->widget('booster.widgets.TbCarousel',
    array(
        'items' => array(
            array(
                'image' => 'images/ad/1024_1.gif',
                'label' => '',
                'caption' => ''
            ),
            array(
                'image' => 'images/ad/1024_3.gif',
                'label' => '',
                'caption' => '',
                'link'=>array('site/courseopen')
            ),
            array(
                'image' => 'images/ad/1024_aca.gif',
                'label' => '',
                'caption' => ''
            ),
            array(
                'image' => 'images/ad/1024_mos1.gif',
                'label' => '',
                'caption' => '',
                'link'=>array('site/mos')
            ),
        ),
    )
);
 
 ?>
    

<br>
<div class="col-sm-3">
   
    <?php $this->beginWidget('booster.widgets.TbPanel',
    array(
        'title' => 'ข้อมูลหลักสูตร',        
        'headerIcon' => 'th-list',
        'context' => 'info',
    	'padContent' => false,
        'htmlOptions' => array('class' => 'bootstrap-widget-table')
    ));?>
    
   <div class="list-group">
        <?php 
            $data = new CActiveDataProvider('Category');
            foreach ($data->getData() as $value){               
                echo '<a href="'.Yii::app()->createUrl("course/courseList",array("catid"=>$value->category_id)).'" class="list-group-item">';
                //echo '<span class="badge">0</span>';
                echo '<h4 class="list-group-item-heading">'.$value->category_name.'</h4>';
                //echo '<p class="list-group-item-text">ถถถ</p>';
                echo '</a>';
            }
        ?>
                
    </div> 
    <?php $this->endWidget(); ?> 
   

  
</div><!-- end left -->

<div class="col-sm-9">
    <?php $this->beginWidget('booster.widgets.TbPanel',
    array(
        'title' => 'หลักสูตรอบรม',        
        'headerIcon' => 'th-list',
        'context' => 'info',
    	'padContent' => false,
        'htmlOptions' => array('class' => 'bootstrap-widget-table')
    )
    );?>
     <table class="table table-striped">
        <thead>
            <tr >
                <th>หลักสูตร </th>
                <th>วันอบรม</th>
                <th>รับ</th>
                <th>ราคา/ท.</th>
                <th>ลงชื่อ</th>

            </tr>
        </thead>
            <tbody>
               <?php
                    $list_wd = Yii::app()->db->createCommand(" select co.copenid,cc.course_name,co.opendate,co.recive,cc.price,cc.course_id from course cc,courseopen co where cc.course_id = co.course_id and co.status='Open' ")->query();
                    foreach ($list_wd as $wd) {
                ?>
                   <th>
                    <p class="text-primary">  <?php echo $wd['course_name']; ?></p>
                    
                    </th>
                    <td >
                        <?php echo $wd['opendate']; ?>
                    </td>
                    <td >
                        <?php echo $wd['recive']; ?> 
                    </td>
                    <td >
                        <?php echo $wd['price']; ?>
                    </td>                  
                    <td>
                        <a type="button" class="btn btn-success btn-sm" href="<?php  echo $this->createUrl("courseregis/Register",array("cid"=>$wd['course_id'],"oid"=>$wd['copenid'])); ?> ">ลงชื่อ</a>
                    </td>
                  
                    </tr>
                <?php
                    }
                ?> 

            </tbody>
        </table>
<?php $this->endWidget(); ?> 
    
<div >
  


</div>
   <?php $this->beginWidget('booster.widgets.TbPanel',
    array(
        'title' => 'ข่าว-ประชาสัมพันธ์',        
        'headerIcon' => 'th-list',
        'context' => 'info',
    	'padContent' => false,
        'htmlOptions' => array('class' => 'bootstrap-widget-table')
    )
);?>
<table class="table table-hover">
        <thead><tr>  </tr> </thead>

        <?php
        $list = Yii::app()->db->createCommand("select * FROM news ORDER BY news_id DESC LIMIT 5")->query();

        foreach ($list as $ds) {
            ?>
            <tr> 

                <td>
                    <span class="label label-primary"> <?php echo $ds['news_create_date']; ?>  </span> &nbsp;&nbsp;                    
                    <strong> <a  href=" <?php echo $this->createUrl("News/View", array("id" => $ds['news_id'])); ?>"> <?php echo $ds['news_topic']; ?> </a> </strong>
                    <h6> <?php echo $ds['news_detail']; ?></h6>
       
                </td>          
            </tr>
              
            <?php
        }
        ?>    
    </table> 
<?php $this->endWidget(); ?>     
    
</div> <!-- end right-->

