<?php
/* @var $this InboxController */
/* @var $model Inbox */

$this->breadcrumbs=array(
	'Inboxes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Inbox', 'url'=>array('index')),
	array('label'=>'Manage Inbox', 'url'=>array('admin')),
);
?>

<h1>Create Inbox</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>