<?php
/* @var $this OutboxSlaveController */
/* @var $model OutboxSlave */

$this->breadcrumbs=array(
	'Outbox Slaves'=>array('index'),
	$model->ID,
);

//$this->menu=array(
//	array('label'=>'List OutboxSlave', 'url'=>array('index')),
//	array('label'=>'Create OutboxSlave', 'url'=>array('create')),
//	array('label'=>'Update OutboxSlave', 'url'=>array('update', 'id'=>$model->ID)),
//	array('label'=>'Delete OutboxSlave', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage OutboxSlave', 'url'=>array('admin')),
//);
?>

<h1>View OutboxSlave #<?php echo $model->ID; ?></h1>

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
