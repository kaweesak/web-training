<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootflat -->
    <?php 
        //Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/css/bootflat.css');
        //Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/assets/css/style.css');    
    ?>
    <link href="<?php echo Yii::app()->theme->baseURL;?>/assets/css/bootflat.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseURL;?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">                        
                        <img src="images/logo.png" height="45" alt="">
                    </a>
                    </a>
                    <?php //echo CHtml::link(Yii::app()->name,Yii::app()->baseUrl,array('class'=>'navbar-brand')); ?>
                </div>	
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/index">หน้าแรก<span class="sr-only">(current)</span></a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">หลักสูตรอบรม <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=Site/regisdetail">ระเบียบการสมัคร</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=course/courseList">รายละเอียดหลักสูตร</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=Site/coursetable">ตารางเทียบโอน</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=Site/courseopen">ตารางอบรม</a></li>
          </ul>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">บริการห้องปฏิบัติการคอมพิวเตอร์ <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=room/roominfo">ห้องอบรม</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=Site/food">อาหารและของว่าง</a></li>            
            <li class="divider"></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=roomevents/events">ตารางการใช้ห้อง</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=roomreserv/add">จองห้องอบรม</a></li>
          </ul>
        </li>       
        <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/mos">MOS</a></li>
        <li><a href=""></a></li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">เกี่ยวกับเรา<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=Site/personal">บุคลากร</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/contact">สถานที่ตั้ง</a></li>            
          </ul>
      </ul>     
     
    </div><!-- /.navbar-collapse -->
    
            
            </div>
        </nav>
    </header>
    
    <div class="container well">
        
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
    
    </div>
  
    <!-- start footer-->
     
    <div class="row">
        <div class="col-md-12">
            <div class="footer">
                <div class="container">
                    <div class="clearfix">
                        <div class="footer-logo">
                            <a href="#"><img src="images/logo.png"></a>
                        </div>
                        <dl class="footer-nav">
                            <dt class="nav-title">ลิงก์</dt>
                            <dd class="nav-item">
                                <?php echo CHtml::link('มหาวิทยาลัยราชภัฏสวนดุสิต', 'http://www.dusit.ac.th');?>                                 
                            </dd>
                            <dd class="nav-item">
                                <?php echo CHtml::link('สำนักวิทยบริการฯ', 'http://www.arit.dusit.ac.th');?>                                 
                            </dd>                           
                            <dd class="nav-item">
                                <?php echo CHtml::link('สวนดุสิตโพล', 'http://dusitpoll.dusit.ac.th');?>                                 
                            </dd>
                            <dd class="nav-item">
                                <?php echo CHtml::link('โรงเรียนสาธิตละอออุทิศ', 'http://www.la-orutis.dusit.ac.th');?>                               
                            </dd>
                        </dl>
                        <dl class="footer-nav">
                            <dt class="nav-title">เกี่ยวกับเรา</dt>
                            <dd class="nav-item">
                                <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=Site/personal">บุคลากร</a>
                            </dd>
                            <dd class="nav-item">
                                <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/contact">ติดต่อ</a>
                            </dd>                            
                        </dl>
<!--                        <dl class="footer-nav">
                            <dt class="nav-title">รูปภาพ</dt>
                            <dd class="nav-item">
                                <a href="#">Flickr</a>
                            </dd>
                            <dd class="nav-item">
                                <a href="#">Picasa</a>
                            </dd>
                            <dd class="nav-item">
                                <a href="#">iStockPhoto</a>
                            </dd>
                            <dd class="nav-item">
                                <a href="#">PhotoDune</a>
                            </dd>
                        </dl>
                        <dl class="footer-nav">
                            <dt class="nav-title">ติดต่อ</dt>
                            <dd class="nav-item">
                                <a href="#">Basic Info</a>
                            </dd>
                            <dd class="nav-item">
                                <a href="#">Map</a>
                            </dd><dd class="nav-item">
                                <a href="#">Conctact Form</a>
                            </dd>
                        </dl>-->
                    </div>
                    <div class="footer-copyright text-center">Copyright &copy; <?php echo date('Y'); ?> by สำนักวิทยบริการและเทคโนโลยีสารสนเทศ มหาวิทยาลัยราชภัฏสวนดุสิต.<br/>
		All Rights Reserved.<br/>
                    
                    </div>
        
                                    </div>
                        
                                </div>
                                    
                            </div>
                                
                        </div>
                            
  
	
  
</div><!-- page -->

</body>
</html>
