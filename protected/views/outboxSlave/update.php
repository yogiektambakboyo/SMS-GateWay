<?php
/* @var $this OutboxSlaveController */
/* @var $model OutboxSlave */

$this->breadcrumbs=array(
	'Outbox Slaves'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

//$this->menu=array(
//	array('label'=>'List OutboxSlave', 'url'=>array('index')),
//	array('label'=>'Create OutboxSlave', 'url'=>array('create')),
//	array('label'=>'View OutboxSlave', 'url'=>array('view', 'id'=>$model->ID)),
//	array('label'=>'Manage OutboxSlave', 'url'=>array('admin')),
//);
?>

<h1>Update OutboxSlave <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>