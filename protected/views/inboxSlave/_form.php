<?php
/* @var $this InboxSlaveController */
/* @var $model InboxSlave */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inbox-slave-form',
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
		<?php echo $form->labelEx($model,'ReceivingDateTime'); ?>
		<?php echo $form->textField($model,'ReceivingDateTime'); ?>
		<?php echo $form->error($model,'ReceivingDateTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text'); ?>
		<?php echo $form->textArea($model,'Text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SenderNumber'); ?>
		<?php echo $form->textField($model,'SenderNumber',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'SenderNumber'); ?>
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
		<?php echo $form->labelEx($model,'SMSCNumber'); ?>
		<?php echo $form->textField($model,'SMSCNumber',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'SMSCNumber'); ?>
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
		<?php echo $form->labelEx($model,'RecipientID'); ?>
		<?php echo $form->textArea($model,'RecipientID',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'RecipientID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Processed'); ?>
		<?php echo $form->textField($model,'Processed',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'Processed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Readed'); ?>
		<?php echo $form->textField($model,'Readed',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'Readed'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->