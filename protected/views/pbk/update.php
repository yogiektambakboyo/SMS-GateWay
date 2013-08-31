<?php
/* @var $this PbkController */
/* @var $model Pbk */

$this->breadcrumbs=array(
	'Phone Book'=>array('index'),
	$model->Name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Phone Book', 'url'=>array('index')),
	array('label'=>'Create Phone Book', 'url'=>array('create')),
	array('label'=>'View Phone Book', 'url'=>array('view', 'id'=>$model->ID)),
//	array('label'=>'Manage Pbk', 'url'=>array('admin')),
);
?>

<h1>Update Phone Book #<?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>