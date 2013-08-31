<?php
/* @var $this OutboxController */
/* @var $data Outbox */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('SendBefore')); ?>:</b>
	<?php echo CHtml::encode($data->SendBefore); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SendAfter')); ?>:</b>
	<?php echo CHtml::encode($data->SendAfter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Text')); ?>:</b>
	<?php echo CHtml::encode($data->Text); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DestinationNumber')); ?>:</b>
	<?php echo CHtml::encode($data->DestinationNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Coding')); ?>:</b>
	<?php echo CHtml::encode($data->Coding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UDH')); ?>:</b>
	<?php echo CHtml::encode($data->UDH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Class')); ?>:</b>
	<?php echo CHtml::encode($data->Class); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TextDecoded')); ?>:</b>
	<?php echo CHtml::encode($data->TextDecoded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MultiPart')); ?>:</b>
	<?php echo CHtml::encode($data->MultiPart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RelativeValidity')); ?>:</b>
	<?php echo CHtml::encode($data->RelativeValidity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SenderID')); ?>:</b>
	<?php echo CHtml::encode($data->SenderID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SendingTimeOut')); ?>:</b>
	<?php echo CHtml::encode($data->SendingTimeOut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DeliveryReport')); ?>:</b>
	<?php echo CHtml::encode($data->DeliveryReport); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CreatorID')); ?>:</b>
	<?php echo CHtml::encode($data->CreatorID); ?>
	<br />

	*/ ?>

</div>