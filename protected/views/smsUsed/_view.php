<?php
/* @var $this SmsUsedController */
/* @var $data SmsUsed */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sms_used')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sms_used), array('view', 'id'=>$data->id_sms_used)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sms_date')); ?>:</b>
	<?php echo CHtml::encode($data->sms_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('out_sms_count')); ?>:</b>
	<?php echo CHtml::encode($data->out_sms_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('in_sms_count')); ?>:</b>
	<?php echo CHtml::encode($data->in_sms_count); ?>
	<br />


</div>