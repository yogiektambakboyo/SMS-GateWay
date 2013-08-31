<?php
/* @var $this OutboxMultipartController */
/* @var $data OutboxMultipart */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Text')); ?>:</b>
	<?php echo CHtml::encode($data->Text); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('SequencePosition')); ?>:</b>
	<?php echo CHtml::encode($data->SequencePosition); ?>
	<br />


</div>