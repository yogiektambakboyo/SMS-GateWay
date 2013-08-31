<?php
/* @var $this OutboxSlaveController */
/* @var $model OutboxSlave */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'outbox-slave-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'UpdatedInDB'); ?>
		<?php echo $form->textField($model,'UpdatedInDB'); ?>
		<?php echo $form->error($model,'UpdatedInDB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InsertIntoDB'); ?>
		<?php echo $form->textField($model,'InsertIntoDB'); ?>
		<?php echo $form->error($model,'InsertIntoDB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SendingDateTime'); ?>
		<?php echo $form->textField($model,'SendingDateTime'); ?>
		<?php echo $form->error($model,'SendingDateTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SendBefore'); ?>
		<?php echo $form->textField($model,'SendBefore'); ?>
		<?php echo $form->error($model,'SendBefore'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SendAfter'); ?>
		<?php echo $form->textField($model,'SendAfter'); ?>
		<?php echo $form->error($model,'SendAfter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text'); ?>
		<?php echo $form->textArea($model,'Text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DestinationNumber'); ?>
		<?php echo $form->textField($model,'DestinationNumber',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'DestinationNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Coding'); ?>
		<?php echo $form->textField($model,'Coding',array('size'=>22,'maxlength'=>22)); ?>
		<?php echo $form->error($model,'Coding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UDH'); ?>
		<?php echo $form->textArea($model,'UDH',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'UDH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Class'); ?>
		<?php echo $form->textField($model,'Class'); ?>
		<?php echo $form->error($model,'Class'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TextDecoded'); ?>
		<?php echo $form->textArea($model,'TextDecoded',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'TextDecoded'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MultiPart'); ?>
		<?php echo $form->textField($model,'MultiPart',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'MultiPart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RelativeValidity'); ?>
		<?php echo $form->textField($model,'RelativeValidity'); ?>
		<?php echo $form->error($model,'RelativeValidity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SenderID'); ?>
		<?php echo $form->textField($model,'SenderID',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'SenderID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SendingTimeOut'); ?>
		<?php echo $form->textField($model,'SendingTimeOut'); ?>
		<?php echo $form->error($model,'SendingTimeOut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DeliveryReport'); ?>
		<?php echo $form->textField($model,'DeliveryReport',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'DeliveryReport'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CreatorID'); ?>
		<?php echo $form->textArea($model,'CreatorID',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'CreatorID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->