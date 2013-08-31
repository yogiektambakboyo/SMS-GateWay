<?php
/* @var $this OutboxMultipartController */
/* @var $model OutboxMultipart */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'outbox-multipart-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Text'); ?>
		<?php echo $form->textArea($model,'Text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Text'); ?>
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
		<?php echo $form->labelEx($model,'ID'); ?>
		<?php echo $form->textField($model,'ID',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ID'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'SequencePosition'); ?>
		<?php echo $form->textField($model,'SequencePosition'); ?>
		<?php echo $form->error($model,'SequencePosition'); ?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->