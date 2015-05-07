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
                'caption' => ''
            ),
            array(
                'image' => 'images/ad/1024_aca.gif',
                'label' => '',
                'caption' => ''
            ),
            array(
                'image' => 'images/ad/1024_mos1.gif',
                'label' => '',
                'caption' => ''
            ),
        ),
    )
);
 
 ?>
    

<br>
<div class="col-sm-3">
    <div class="list-group">
        <?php 
            $data = new CActiveDataProvider('category');
            foreach ($data->getData() as $value){
                echo '<a href="'.Yii::app()->createUrl("course/courseList",array("catid"=>$value->category_id)).'" class="list-group-item">';
                echo '<span class="badge">0</span>';
                echo '<h4 class="list-group-item-heading">'.$value->category_name.'</h4>';
                //echo '<p class="list-group-item-text">ถถถ</p>';
                echo '</a>';
            }
        ?>
                
        </div>


        <hr>


<!--
         
            <div class="thumbnail">
                <img data-src="holder.js/210%x150" alt="Generic placeholder thumbnail" src="/userfiles/huwkosoft/activity/06.jpg">
                <div class="caption">
                    <p><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> 
                        <a href="index.php?r=Activity/Showimg&id=6"> ประชุมการพัฒนาบุคลากรด้านการเขียนโปรแกรม  รพ.ชุมพล และผู้ที่สนใจ 2556-2557</a></p>
                </div>
            </div>
             
            <div class="thumbnail">
                <img data-src="holder.js/210%x150" alt="Generic placeholder thumbnail" src="/userfiles/huwkosoft/activity/05.jpg">
                <div class="caption">
                    <p><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> 
                        <a href="index.php?r=Activity/Showimg&id=5"> ประชุมพัฒนาโปรแกรมบัญชีเกณฑ์คงค้าง รพ.สต. งานประกัน สสจ.สุรินทร์   2556-2557</a></p>
                </div>
            </div>
             
            <div class="thumbnail">
                <img data-src="holder.js/210%x150" alt="Generic placeholder thumbnail" src="/userfiles/huwkosoft/activity/04.jpg">
                <div class="caption">
                    <p><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> 
                        <a href="index.php?r=Activity/Showimg&id=4"> อมรม..เจ้าหน้าที่โรงพยาบาลศีรณรงค์ใช้งานงานโปรแกรม HOSxP  11,12,13 กันยายน 2556</a></p>
                </div>
            </div>
             
            <div class="thumbnail">
                <img data-src="holder.js/210%x150" alt="Generic placeholder thumbnail" src="/userfiles/huwkosoft/activity/03.jpg">
                <div class="caption">
                    <p><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> 
                        <a href="index.php?r=Activity/Showimg&id=3"> อมรม..เจ้าหน้าที่โรงพยาบาลเขวาสินรินทร์ใช้งานโปรแกรม HOSxP กรกฎาคม 2556</a></p>
                </div>
            </div>
             
            <div class="thumbnail">
                <img data-src="holder.js/210%x150" alt="Generic placeholder thumbnail" src="/userfiles/huwkosoft/activity/02.jpg">
                <div class="caption">
                    <p><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> 
                        <a href="index.php?r=Activity/Showimg&id=2"> การอบรม PHP Yii Framework  Advance 14-26  สิงหาคม 2556</a></p>
                </div>
            </div>
             
            <div class="thumbnail">
                <img data-src="holder.js/210%x150" alt="Generic placeholder thumbnail" src="/userfiles/huwkosoft/activity/01.jpg">
                <div class="caption">
                    <p><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> 
                        <a href="index.php?r=Activity/Showimg&id=1"> การอบรม PHP Yii Framework  Basic  11-13  กรกฎาคม 2556</a></p>
                </div>
            </div>-->
</div><!-- end left -->

<div class="col-sm-9">
    <?php $this->beginWidget('booster.widgets.TbPanel',
    array(
        'title' => 'หลักสูตรอบรม',        
        'headerIcon' => 'th-list',
    	'padContent' => false,
        'htmlOptions' => array('class' => 'bootstrap-widget-table')
    )
    );?>
     <table class="table table-bordered table-striped">
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
                        <a type="button" class="btn btn-success btn-sm" href="<?php  echo $this->createUrl("course/courseRegister",array("cid"=>$wd['course_id'],"oid"=>$wd['copenid'])); ?> ">ลงชื่อ</a>
                    </td>
                  
                    </tr>
                <?php
                    }
                ?> 

            </tbody>
        </table>
<?php $this->endWidget(); ?> 
 
   <?php $this->beginWidget('booster.widgets.TbPanel',
    array(
        'title' => 'ข่าว-ประชาสัมพันธ์',        
        'headerIcon' => 'th-list',
    	'padContent' => false,
        'htmlOptions' => array('class' => 'bootstrap-widget-table')
    )
);?>
     <table class="table table-bordered table-striped">              
                <tbody>
                        <tr>
                            <th>
                    <p class="text-primary"> การเขียนโปรแกรมจัดการข้อมูลภาษา C#.Net  Visual Studio 2013 MySQL Basic    รุ่นที่ 1/2558</p>
                    
                    </th>
                    
                    </tr>
                      <tr>
                            <th>
                    <p class="text-primary"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>  การเขียนโปรแกรมจัดการข้อมูลภาษา VB.Net  Visual Studio 2013 MySQL Basic    รุ่นที่ 1/2558</p>
                    
                    </th>
                  </tr>
                                        <tr>
                            <th>
                    <p class="text-primary"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>  สร้างระบบรายงานด้วย Yii Bootstrap Report HOSxP รุ่น 1/2558</p>
                    
                    </th>
                   </tr>
                                        <tr>
                            <th>
                    <p class="text-primary"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>  สร้างเว็บไซด์องค์กร ( Web โรงพยาบาล ) ด้วย Yii Bootstrap3 Theme รุ่น 1/2558</p>
                    
                    </th>
                    
                    </tr>
                                </tbody>
            </table>
<?php $this->endWidget(); ?> 
</div> <!-- end right-->

