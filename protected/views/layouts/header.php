<div id="header">
<?php
$dapat=User::model()->findByAttributes(array("name"=>Yii::app()->user->name));
$dapat_id=$dapat['id_user'];
$model=new User;?>
        	<div id="logo">
            <div class="header_status">Status :          
            <label id="gammu-status">
            <?php $get_update_status=Phones::model()->find();
            $update=$get_update_status['UpdatedInDB'];
            list($date, $time) = explode(' ', $update);
            list($year, $month, $day) = explode('-', $date);
        	list($hour, $minute, $second) = explode(':', $time);
            $timestamp = $year.$month.$day.$hour.$minute.$second;
            $now=date('YmdHis', time()+17983);
            if($timestamp>$now)
            	{
            	   echo "Connected";
                   }
                   else
                   {
                    echo "<font color='red'>Disconnected</font>";
                    }         ?>
            
            
            </label></div>
            <div class="header_akun">Hello, <?php echo Yii::app()->user->name; ?> | <?php echo CHtml::link('Setting Akun',$dapat_id==1 ? array('/user/admin') : array('/user/view', 'id'=>$dapat_id));?> | <?php echo CHtml::link('Logout',array('/site/logout'))?></div>
            <div class="header_date"><?php echo date("D, d-m-Y");?></div>
            </div>
	</div><!-- header -->  