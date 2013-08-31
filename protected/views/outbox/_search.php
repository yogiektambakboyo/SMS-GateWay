<?php
/* @var $this OutboxController */
/* @var $model Outbox */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'UpdatedInDB'); ?>
		<?php echo $form->textField($model,'UpdatedInDB'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InsertIntoDB'); ?>
		<?php echo $form->textField($model,'InsertIntoDB'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SendingDateTime'); ?>
		<?php echo $form->textField($model,'SendingDateTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SendBefore'); ?>
		<?php echo $form->textField($model,'SendBefore'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SendAfter'); ?>
		<?php echo $form->textField($model,'SendAfter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Text'); ?>
		<?php echo $form->textArea($model,'Text',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DestinationNumber'); ?>
		<?php echo $form->textField($model,'DestinationNumber',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Coding'); ?>
		<?php echo $form->textField($model,'Coding',array('size'=>22,'maxlength'=>22)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UDH'); ?>
		<?php echo $form->textArea($model,'UDH',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Class'); ?>
		<?php echo $form->textField($model,'Class'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TextDecoded'); ?>
		<?php echo $form->textArea($model,'TextDecoded',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MultiPart'); ?>
		<?php echo $form->textField($model,'MultiPart',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RelativeValidity'); ?>
		<?php echo $form->textField($model,'RelativeValidity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SenderID'); ?>
		<?php echo $form->textField($model,'SenderID',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SendingTimeOut'); ?>
		<?php echo $form->textField($model,'SendingTimeOut'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DeliveryReport'); ?>
		<?php echo $form->textField($model,'DeliveryReport',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CreatorID'); ?>
		<?php echo $form->textArea($model,'CreatorID',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->