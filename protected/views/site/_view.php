<?php
/* @var $this PhonesController */
/* @var $data Phones */
?>

<div id="kolomkecil">
<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?> :</b>
	<?php echo CHtml::encode($data->ID); ?>, 
    <b><?php echo CHtml::encode($data->getAttributeLabel('IMEI')); ?> : </b>
	<?php echo CHtml::link(CHtml::encode($data->IMEI), array('view', 'id'=>$data->IMEI)); ?>     
    <label id="connection">, Status 
    <?php $get_update_status=Phones::model()->findAllByPk(CHtml::encode($data->IMEI));
            $imei=CHtml::encode($data->IMEI);
            $update=CHtml::encode($data->UpdatedInDB);
            list($date, $time) = explode(' ', $update);
            list($year, $month, $day) = explode('-', $date);
        	list($hour, $minute, $second) = explode(':', $time);
            $timestamp = $year.$month.$day.$hour.$minute.$second;
            $now=date('YmdHis', time()+17983); 
            if($timestamp>$now)
            	{
            	   echo ": <label id='status".$imei."'>Connected</label>, <button onclick='myDisconnect".$imei."()'>Disconnect</button> ";
                   }
                   else
                   {
                    echo "<font color='red'>: <label id='status".$imei."'>Disconnected</label></font>, <button onclick='myConnect".$imei."()'>Connect</button>";
                    }         ?>
    
    </label>
</div>


    

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Client')); ?> : </b>
	<?php echo CHtml::encode($data->Client); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Battery')); ?>:</b>
	<?php echo CHtml::encode($data->Battery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Signal')); ?>:</b>
	<?php echo CHtml::encode($data->Signal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sent')); ?>:</b>
	<?php echo CHtml::encode($data->Sent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Received')); ?>:</b>
	<?php echo CHtml::encode($data->Received); ?>
	<br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('Receive')); ?>:</b>
	<?php echo CHtml::encode($data->Receive); ?>
	<br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::encode($data->ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UpdatedInDB')); ?>:</b>
	<?php echo CHtml::encode($data->UpdatedInDB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InsertIntoDB')); ?>:</b>
	<?php echo CHtml::encode($data->InsertIntoDB); ?>
    	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TimeOut')); ?>:</b>
	<?php echo CHtml::encode($data->TimeOut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Send')); ?>:</b>
	<?php echo CHtml::encode($data->Send); ?>
	<br />
	*/ ?>


   
