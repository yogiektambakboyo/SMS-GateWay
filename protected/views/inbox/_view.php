<?php
/* @var $this InboxController */
/* @var $data Inbox */
?>


<div id="baris">

	<img src="images/view.jpg" width="15" height="15"/><?php echo CHtml::link('View  | ', array('view', 'id'=>$data->ID)); ?>
    


	<b><?php echo CHtml::encode($data->getAttributeLabel('ReceivingDateTime')); ?>:</b>
	<?php echo CHtml::encode($data->ReceivingDateTime); ?>

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('SenderNumber')); ?>:</b>
	<?php echo CHtml::encode($data->SenderNumber); ?>

    
    <b> - </b>
	<?php echo CHtml::encode($data->TextDecoded); ?>


	

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('SMSCNumber')); ?>:</b>
	<?php echo CHtml::encode($data->SMSCNumber); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('UpdatedInDB')); ?>:</b>
	<?php echo CHtml::encode($data->UpdatedInDB); ?>
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

	*/ ?>

</div>