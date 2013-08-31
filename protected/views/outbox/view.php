<?php
/* @var $this OutboxController */
/* @var $model Outbox */

$this->breadcrumbs=array(
	'Outboxes'=>array('index'),
	$model->ID,
);
/*
$this->menu=array(
	array('label'=>'List Outbox', 'url'=>array('index')),
	array('label'=>'Create Outbox', 'url'=>array('create')),
	array('label'=>'Update Outbox', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Outbox', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Outbox', 'url'=>array('admin')),
);
*/
?>

<h1>View Outbox #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'UpdatedInDB',
		'InsertIntoDB',
		'SendingDateTime',
		'SendBefore',
		'SendAfter',
		'Text',
		'DestinationNumber',
		'Coding',
		'UDH',
		'Class',
		'TextDecoded',
		'ID',
		'MultiPart',
		'RelativeValidity',
		'SenderID',
		'SendingTimeOut',
		'DeliveryReport',
		'CreatorID',
	),
)); ?>
