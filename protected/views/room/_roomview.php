<!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="<?php echo Yii::app()->baseURL;?>/images/room/room01.jpg"  height="300" width="700" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?php echo CHtml::encode($data->roomname); ?></h3>
                <h4>ความจุ: <?php echo CHtml::encode($data->capacity); ?> คน</h4>
                <?php echo $data->description; ?>
                <a class="btn btn-primary" href="#">รายละเอียด <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
