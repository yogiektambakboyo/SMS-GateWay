<?php
/* @var $this SentitemsController */
/* @var $data Sentitems */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UpdatedInDB')); ?>:</b>
	<?php echo CHtml::encode($data->UpdatedInDB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InsertIntoDB')); ?>:</b>
	<?php echo CHtml::encode($data->InsertIntoDB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SendingDateTime')); ?>:</b>
	<?php echo CHtml::encode($data->SendingDateTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DeliveryDateTime')); ?>:</b>
	<?php echo CHtml::encode($data->DeliveryDateTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Text')); ?>:</b>
	<?php echo CHtml::encode($data->Text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DestinationNumber')); ?>:</b>
	<?php echo CHtml::encode($data->DestinationNumber); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Coding')); ?>:</b>
	<?php echo CHtml::encode($data->Coding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UDH')); ?>:</b>
	<?php echo CHtml::encode($data->UDH); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('SenderID')); ?>:</b>
	<?php echo CHtml::encode($data->SenderID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SequencePosition')); ?>:</b>
	<?php echo CHtml::encode($data->SequencePosition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StatusError')); ?>:</b>
	<?php echo CHtml::encode($data->StatusError); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TPMR')); ?>:</b>
	<?php echo CHtml::encode($data->TPMR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RelativeValidity')); ?>:</b>
	<?php echo CHtml::encode($data->RelativeValidity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CreatorID')); ?>:</b>
	<?php echo CHtml::encode($data->CreatorID); ?>
	<br />

	*/ ?>

</div>