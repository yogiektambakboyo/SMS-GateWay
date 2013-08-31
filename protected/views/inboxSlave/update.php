<?php
/* @var $this InboxSlaveController */
/* @var $model InboxSlave */

$this->breadcrumbs=array(
	'Inbox Slaves'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List InboxSlave', 'url'=>array('index')),
	array('label'=>'Create InboxSlave', 'url'=>array('create')),
	array('label'=>'View InboxSlave', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage InboxSlave', 'url'=>array('admin')),
);
?>

<h1>Update InboxSlave <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>