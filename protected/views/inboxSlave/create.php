<?php
/* @var $this InboxSlaveController */
/* @var $model InboxSlave */

$this->breadcrumbs=array(
	'Inbox Slaves'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InboxSlave', 'url'=>array('index')),
	array('label'=>'Manage InboxSlave', 'url'=>array('admin')),
);
?>

<h1>Create InboxSlave</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>