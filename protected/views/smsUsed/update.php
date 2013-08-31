<?php
/* @var $this SmsUsedController */
/* @var $model SmsUsed */

$this->breadcrumbs=array(
	'Sms Useds'=>array('index'),
	$model->id_sms_used=>array('view','id'=>$model->id_sms_used),
	'Update',
);

$this->menu=array(
	array('label'=>'List SmsUsed', 'url'=>array('index')),
	array('label'=>'Create SmsUsed', 'url'=>array('create')),
	array('label'=>'View SmsUsed', 'url'=>array('view', 'id'=>$model->id_sms_used)),
	array('label'=>'Manage SmsUsed', 'url'=>array('admin')),
);
?>

<h1>Update SmsUsed <?php echo $model->id_sms_used; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>