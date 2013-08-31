<?php
/* @var $this SmsUsedController */
/* @var $model SmsUsed */

$this->breadcrumbs=array(
	'Sms Useds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SmsUsed', 'url'=>array('index')),
	array('label'=>'Manage SmsUsed', 'url'=>array('admin')),
);
?>

<h1>Create SmsUsed</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>