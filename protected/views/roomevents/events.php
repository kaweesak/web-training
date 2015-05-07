<?php
$this->pageTitle=Yii::app()->name . ' - ตารางการใช้ห้อง';
$this->breadcrumbs=array(
	'ตารางการใช้ห้อง',
);
?>

<!--<h3 class="example-title">ตารางการใช้ห้อง</h3>-->

<br>

<div class="row">
    <div class="col-lg-12">
<?php $this->widget('ext.fullcalendar.EFullCalendarHeart', array(
    //'themeCssFile'=>'cupertino/jquery-ui.min.css',
    'id'=>'roomcalendar',
    'options'=>array(
        'lang'=>'th',
        'header'=>array(
            'left'=>'prev,next,today',
            'center'=>'title',
            'right'=>'month,agendaWeek,agendaDay',
        ),
        'lazyFetching'=>true,
        'events'=>''.Yii::app()->baseUrl.'/index.php?r=roomevents/listevents', 
        'timeFormat'=>'',
      
    )
    ));
?>
    </div>
</div>