<?php
/* @var $this SentitemsController */
/* @var $model Sentitems */

$this->breadcrumbs=array(
	'Sentitems'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Sentitems', 'url'=>array('index')),
//	array('label'=>'Manage Sentitems', 'url'=>array('admin')),
//);
?>

<h1>Create Sentitems</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>