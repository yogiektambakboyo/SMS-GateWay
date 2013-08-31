<?php
/* @var $this SentitemsSlaveController */
/* @var $model SentitemsSlave */

$this->breadcrumbs=array(
	'Sentitems Slaves'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List SentitemsSlave', 'url'=>array('index')),
//	array('label'=>'Manage SentitemsSlave', 'url'=>array('admin')),
//);
?>

<h1>Create SentitemsSlave</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>