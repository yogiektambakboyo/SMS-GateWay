<?php
/* @var $this OutboxMultipartController */
/* @var $model OutboxMultipart */

$this->breadcrumbs=array(
	'Outbox Multiparts'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List OutboxMultipart', 'url'=>array('index')),
//	array('label'=>'Manage OutboxMultipart', 'url'=>array('admin')),
//);
?>

<h1>Create OutboxMultipart</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>