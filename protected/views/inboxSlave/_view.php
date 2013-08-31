<?php
/* @var $this InboxSlaveController */
/* @var $data InboxSlave */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UpdatedInDB')); ?>:</b>
	<?php echo CHtml::encode($data->UpdatedInDB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ReceivingDateTime')); ?>:</b>
	<?php echo CHtml::encode($data->ReceivingDateTime); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('SenderNumber')); ?>:</b>
	<?php echo CHtml::encode($data->SenderNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Coding')); ?>:</b>
	<?php echo CHtml::encode($data->Coding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UDH')); ?>:</b>
	<?php echo CHtml::encode($data->UDH); ?>
	<br />

	<?php /*
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('Text')); ?>:</b>
	<?php echo CHtml::encode($data->Text); ?>
	<br />
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('SMSCNumber')); ?>:</b>
	<?php echo CHtml::encode($data->SMSCNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Class')); ?>:</b>
	<?php echo CHtml::encode($data->Class); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TextDecoded')); ?>:</b>
	<?php echo CHtml::encode($data->TextDecoded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RecipientID')); ?>:</b>
	<?php echo CHtml::encode($data->RecipientID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Processed')); ?>:</b>
	<?php echo CHtml::encode($data->Processed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Readed')); ?>:</b>
	<?php echo CHtml::encode($data->Readed); ?>
	<br />

	*/ ?>

</div>