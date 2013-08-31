<?php
/* @var $this SmsUsedController */
/* @var $model SmsUsed */

$this->breadcrumbs=array(
	'Sms Useds'=>array('index'),
	$model->id_sms_used,
);

$this->menu=array(
	array('label'=>'List SmsUsed', 'url'=>array('index')),
	array('label'=>'Create SmsUsed', 'url'=>array('create')),
	array('label'=>'Update SmsUsed', 'url'=>array('update', 'id'=>$model->id_sms_used)),
	array('label'=>'Delete SmsUsed', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sms_used),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SmsUsed', 'url'=>array('admin')),
);
?>

<h1>View SmsUsed #<?php echo $model->id_sms_used; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_sms_used',
		'sms_date',
		'id_user',
		'out_sms_count',
		'in_sms_count',
	),
)); ?>
