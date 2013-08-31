<?php
/* @var $this InboxController */
/* @var $model Inbox */

$this->breadcrumbs=array(
	'Inboxes'=>array('index'),
	$model->ID,
);

//$this->menu=array(
//	array('label'=>'List Inbox', 'url'=>array('index')),
	//array('label'=>'Create Inbox', 'url'=>array('create')),
	//array('label'=>'Update Inbox', 'url'=>array('update', 'id'=>$model->ID)),
	//array('label'=>'Delete Inbox', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Inbox', 'url'=>array('admin')),
//);
?>

<h1>View Inbox #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'UpdatedInDB',
		'ReceivingDateTime',
		//'Text',
		'SenderNumber',
		//'Coding',
		//'UDH',
		//'SMSCNumber',
		//'Class',
		'TextDecoded',
		//'ID',
		//'RecipientID',
		//'Processed',
        //'Readed',
	),
)); ?>
