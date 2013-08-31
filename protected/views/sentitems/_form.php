<?php
/* @var $this SentitemsController */
/* @var $model Sentitems */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sentitems-form',
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
		<?php echo $form->labelEx($model,'DeliveryDateTime'); ?>
		<?php echo $form->textField($model,'DeliveryDateTime'); ?>
		<?php echo $form->error($model,'DeliveryDateTime'); ?>
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
		<?php echo $form->labelEx($model,'ID'); ?>
		<?php echo $form->textField($model,'ID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SenderID'); ?>
		<?php echo $form->textField($model,'SenderID',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'SenderID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SequencePosition'); ?>
		<?php echo $form->textField($model,'SequencePosition'); ?>
		<?php echo $form->error($model,'SequencePosition'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'Status',array('size'=>17,'maxlength'=>17)); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StatusError'); ?>
		<?php echo $form->textField($model,'StatusError'); ?>
		<?php echo $form->error($model,'StatusError'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TPMR'); ?>
		<?php echo $form->textField($model,'TPMR'); ?>
		<?php echo $form->error($model,'TPMR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RelativeValidity'); ?>
		<?php echo $form->textField($model,'RelativeValidity'); ?>
		<?php echo $form->error($model,'RelativeValidity'); ?>
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