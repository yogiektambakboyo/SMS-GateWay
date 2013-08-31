<?php
/* @var $this SentitemsSlaveController */
/* @var $model SentitemsSlave */

$this->breadcrumbs=array(
	'Sentitems Slaves'=>array('index'),
	$model->ID,
);

//$this->menu=array(
//	array('label'=>'List SentitemsSlave', 'url'=>array('index')),
	//array('label'=>'Create SentitemsSlave', 'url'=>array('create')),
	//array('label'=>'Update SentitemsSlave', 'url'=>array('update', 'id'=>$model->ID)),
	//array('label'=>'Delete SentitemsSlave', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage SentitemsSlave', 'url'=>array('admin')),
//);
?>

<h1>View SentitemsSlave #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'UpdatedInDB',
		'InsertIntoDB',
		'SendingDateTime',
		'DeliveryDateTime',
	//	'Text',
		'DestinationNumber',
		'Coding',
		'UDH',
		'SMSCNumber',
		'Class',
		'TextDecoded',
		'ID',
		'SenderID',
		'SequencePosition',
		'Status',
		'StatusError',
		'TPMR',
		'RelativeValidity',
		'CreatorID',
	),
)); ?>
