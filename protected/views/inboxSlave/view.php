<?php
/* @var $this InboxSlaveController */
/* @var $model InboxSlave */

$this->breadcrumbs=array(
	'Inbox Slaves'=>array('index'),
	$model->ID,
);

//$this->menu=array(
//	array('label'=>'List InboxSlave', 'url'=>array('index')),
//	array('label'=>'Create InboxSlave', 'url'=>array('create')),
//	array('label'=>'Update InboxSlave', 'url'=>array('update', 'id'=>$model->ID)),
//	array('label'=>'Delete InboxSlave', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage InboxSlave', 'url'=>array('admin')),
//);
?>

<h1>View InboxSlave #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	//	'UpdatedInDB',
		'ReceivingDateTime',
	//	'Text',
		'SenderNumber',
	//	'Coding',
	//	'UDH',
	//	'SMSCNumber',
	//	'Class',
		'TextDecoded',
	//	'ID',
	//	'RecipientID',
	//	'Processed',
	//	'Readed',
	),
)); ?>
<div id="view-inbox-choice">
<?php
/**
 * Button Action
 * 
 */
 $DesNum = $model->SenderNumber;
 $TexDec = $model->TextDecoded;
$this->widget('zii.widgets.jui.CJuiButton', array(
    'buttonType'=>'link',
    'name'=>'btnGo',
    'caption'=>'Reply',
    'url'=>array('outbox/create&DesNum='.$DesNum),
));

$this->widget('zii.widgets.jui.CJuiButton', array(
    'buttonType'=>'link',
    'name'=>'btnForward',
    'caption'=>'Forward',
    'url'=>array('outbox/create&TexDec='.$TexDec),
));
?>
</div>