<?php
/* @var $this OutboxController */
/* @var $model Outbox */

$this->breadcrumbs=array(
	'Outboxes'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

//$this->menu=array(
//	array('label'=>'List Outbox', 'url'=>array('index')),
//	array('label'=>'Create Outbox', 'url'=>array('create')),
//	array('label'=>'View Outbox', 'url'=>array('view', 'id'=>$model->ID)),
//	array('label'=>'Manage Outbox', 'url'=>array('admin')),
//);
?>

<h1>Update Outbox <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>