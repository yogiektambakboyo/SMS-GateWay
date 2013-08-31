<?php
/* @var $this SmsUsedController */
/* @var $model SmsUsed */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sms-used-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sms_date'); ?>
		<?php echo $form->textField($model,'sms_date'); ?>
		<?php echo $form->error($model,'sms_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'out_sms_count'); ?>
		<?php echo $form->textField($model,'out_sms_count'); ?>
		<?php echo $form->error($model,'out_sms_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'in_sms_count'); ?>
		<?php echo $form->textField($model,'in_sms_count'); ?>
		<?php echo $form->error($model,'in_sms_count'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->