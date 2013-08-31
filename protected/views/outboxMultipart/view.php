<?php
/* @var $this OutboxMultipartController */
/* @var $model OutboxMultipart */

$this->breadcrumbs=array(
	'Outbox Multiparts'=>array('index'),
	$model->ID,
);

//$this->menu=array(
//	array('label'=>'List OutboxMultipart', 'url'=>array('index')),
	//array('label'=>'Create OutboxMultipart', 'url'=>array('create')),
	//array('label'=>'Update OutboxMultipart', 'url'=>array('update', 'id'=>$model->ID)),
//	array('label'=>'Delete OutboxMultipart', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage OutboxMultipart', 'url'=>array('admin')),
//);
?>

<h1>View OutboxMultipart #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Text',
		'Coding',
		'UDH',
		'Class',
		'TextDecoded',
		'ID',
		'SequencePosition',
	),
)); ?>
