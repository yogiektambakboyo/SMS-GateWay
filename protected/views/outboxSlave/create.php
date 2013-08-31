<?php
/* @var $this OutboxSlaveController */
/* @var $model OutboxSlave */

$this->breadcrumbs=array(
	'Outbox Slaves'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List OutboxSlave', 'url'=>array('index')),
//	array('label'=>'Manage OutboxSlave', 'url'=>array('admin')),
//);
?>

<h1>Create OutboxSlave</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>