<?php
/* @var $this SentitemsController */
/* @var $model Sentitems */

$this->breadcrumbs=array(
	'Sentitems'=>array('index'),
	$model->ID,
);

//$this->menu=array(
//	array('label'=>'List Sentitems', 'url'=>array('index')),
	//array('label'=>'Create Sentitems', 'url'=>array('create')),
	//array('label'=>'Update Sentitems', 'url'=>array('update', 'id'=>$model->ID)),
	//array('label'=>'Delete Sentitems', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Sentitems', 'url'=>array('admin')),
//);
?>

<h1>View Sentitems #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'UpdatedInDB',
		'InsertIntoDB',
		'SendingDateTime',
		'DeliveryDateTime',
		'Text',
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
