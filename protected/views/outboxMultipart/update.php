<?php
/* @var $this OutboxMultipartController */
/* @var $model OutboxMultipart */

$this->breadcrumbs=array(
	'Outbox Multiparts'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

//$this->menu=array(
//	array('label'=>'List OutboxMultipart', 'url'=>array('index')),
//	array('label'=>'Create OutboxMultipart', 'url'=>array('create')),
//	array('label'=>'View OutboxMultipart', 'url'=>array('view', 'id'=>$model->ID)),
//	array('label'=>'Manage OutboxMultipart', 'url'=>array('admin')),
//);
?>

<h1>Update OutboxMultipart <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>