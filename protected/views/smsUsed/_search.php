<?php
/* @var $this SmsUsedController */
/* @var $model SmsUsed */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_sms_used'); ?>
		<?php echo $form->textField($model,'id_sms_used'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sms_date'); ?>
		<?php echo $form->textField($model,'sms_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'out_sms_count'); ?>
		<?php echo $form->textField($model,'out_sms_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in_sms_count'); ?>
		<?php echo $form->textField($model,'in_sms_count'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->