<?php
/* @var $this PhonesController */
/* @var $model Phones */

$this->breadcrumbs=array(
	'Phones'=>array('index'),
	$model->IMEI,
);

?>

<h1>View Phones #<?php echo $model->IMEI; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'UpdatedInDB',
		'InsertIntoDB',
		'TimeOut',
		'Send',
		'Receive',
		'IMEI',
		'Client',
		'Battery',
		'Signal',
		'Sent',
		'Received',
	),
)); ?>
