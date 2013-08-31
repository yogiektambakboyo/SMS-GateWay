<?php
/* @var $this SentitemsController */
/* @var $model Sentitems */

$this->breadcrumbs=array(
	'Sentitems'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

//$this->menu=array(
//	array('label'=>'List Sentitems', 'url'=>array('index')),
	//array('label'=>'Create Sentitems', 'url'=>array('create')),
	//array('label'=>'View Sentitems', 'url'=>array('view', 'id'=>$model->ID)),
	//array('label'=>'Manage Sentitems', 'url'=>array('admin')),
//);
?>

<h1>Update Sentitems <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>