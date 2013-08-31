<?php
/* @var $this PbkController */
/* @var $model Pbk */

$this->breadcrumbs=array(
	'Phone Book'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Phone Book', 'url'=>array('index')),
//	array('label'=>'Manage Pbk', 'url'=>array('admin')),
);
?>

<h1>Create Phone Book</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>