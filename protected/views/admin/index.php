<?php
/* @var $this AdminController */

$this->breadcrumbs=array(
	'Admin',
);
?>
<h3>Admin</h3>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class ="glyphicon glyphicon-cog"></i> ผู้ดูแลระบบ</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-cogs fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">01</div>
                                      
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">จัดการระบบ</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">02</div>
                                      
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Member/Index">
                                <div class="panel-footer">
                                    <span class="pull-left">สมาชิก</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="glyphicon glyphicon-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">03</div>                                      
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=News/Index">
                                <div class="panel-footer">
                                    <span class="pull-left">ข่าว-ประชาสัมพันธ์</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-check-square fa-5x"></i>                                        
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">04</div>
                                        
                                    </div>
                                </div>
                            </div>
                             <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Report/Main">
                                <div class="panel-footer">
                                    <span class="pull-left">ลงรับรายงาน HOSxP</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>            
                </div> 
                  
                </div>
            </div>
        </div>
        
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <i class ="glyphicon glyphicon-tasks"></i> จัดการคอร์ส</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                         <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-cogs fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">01</div>
                                      
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=category/admin">
                                <div class="panel-footer">
                                    <span class="pull-left">Category</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">02</div>
                                      
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Member/admin">
                                <div class="panel-footer">
                                    <span class="pull-left">Course</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-arrow-circle-right fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">03</div>
                                      
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Hosxp/Main">
                                <div class="panel-footer">
                                    <span class="pull-left">ลงทะเบียนเรียน</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-check-square fa-5x"></i>                                        
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">04</div>
                                        
                                    </div>
                                </div>
                            </div>
                             <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Report/Main">
                                <div class="panel-footer">
                                    <span class="pull-left">บันทึกผลการเรียน</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> 
                </div>
            </div>
        </div>
        
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <i class ="glyphicon glyphicon-briefcase"></i> จัดการห้องอบรม</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                    <div class="row"> 
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-globe fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">05</div>
                                        
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Lab/Main">
                                <div class="panel-footer">
                                    <span class="pull-left">Room</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFore">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFore" aria-expanded="false" aria-controls="collapseFore">
                    <i class ="glyphicon glyphicon-plus-sign"></i> About</a>
                </h4>
            </div>
            <div id="collapseFore" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFore">
                <div class="panel-body">
                    <p>
                        Kaweesak panyasai<br>
                        Tel:022445229<br>
                        Email:kaweesak_pan@dusit.ac.th
                    </p>
                </div>
            </div>
        </div>
    </div>
