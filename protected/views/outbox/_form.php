<?php
/* @var $this OutboxController */
/* @var $model Outbox */
/* @var $form CActiveForm */
    Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.charcounter.js');
    Yii::app()->clientScript->registerScript('limitText', '$("#'.CHtml::activeId($model, 'TextDecoded').'").charCounter(450);');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'outbox-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model);
     ?>

	<!--<div class="row">
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
		<?php echo $form->labelEx($model,'Coding'); ?>
		<?php echo $form->textField($model,'Coding',array('size'=>22,'maxlength'=>22)); ?>
		<?php echo $form->error($model,'Coding'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'Class'); ?>
		<?php echo $form->textField($model,'Class'); ?>
		<?php echo $form->error($model,'Class'); ?>
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
		<?php echo $form->labelEx($model,'CreatorID'); ?>
		<?php echo $form->textArea($model,'CreatorID',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'CreatorID'); ?>
	</div>    

	<div class="row">
		<?php echo $form->labelEx($model,'Text'); ?>
		<?php echo $form->textArea($model,'Text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Text'); ?>
	</div>-->

	<div class="row">
        
		<?php echo $form->labelEx($model,'DestinationNumber'); ?>
		<?php echo $form->textField($model,'DestinationNumber',array('size'=>20,'maxlength'=>20,'value'=>$DesNum)); ?>
		<?php echo $form->error($model,'DestinationNumber'); ?>
	</div>

	<div class="row">
        <?php $model->TextDecoded=$TexDec ?>
		<?php echo $form->labelEx($model,'TextDecoded'); ?>
		<?php echo $form->textArea($model,'TextDecoded',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'TextDecoded'); ?>
        
	</div>
    
    <div class="row">
		<?php echo $form->hiddenField($model,'UDH',array('type'=>'hidden','value'=>'')); ?>
	</div>    
    
    <div class="row">
		<?php echo $form->hiddenField($model,'MultiPart',array('type'=>'hidden','value'=>'false')); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'DeliveryReport'); ?>
		<?php echo $form->dropDownList($model,'DeliveryReport',array('yes'=>'yes','no'=>'no'),array('empty'=>'-- Select one --')); ?>
		<?php echo $form->error($model,'DeliveryReport'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Send' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->