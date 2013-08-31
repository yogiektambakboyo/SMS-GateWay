<?php
/* @var $this SentitemsSlaveController */
/* @var $model SentitemsSlave */

$this->breadcrumbs=array(
	'Sentitems Slaves'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

//$this->menu=array(
//	array('label'=>'List SentitemsSlave', 'url'=>array('index')),
//	array('label'=>'Create SentitemsSlave', 'url'=>array('create')),
//	array('label'=>'View SentitemsSlave', 'url'=>array('view', 'id'=>$model->ID)),
//	array('label'=>'Manage SentitemsSlave', 'url'=>array('admin')),
//);
?>

<h1>Update SentitemsSlave <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>