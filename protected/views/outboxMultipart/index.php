<?php
/* @var $this OutboxMultipartController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Outbox Multiparts',
);

//$this->menu=array(
//	array('label'=>'Create OutboxMultipart', 'url'=>array('create')),
//	array('label'=>'Manage OutboxMultipart', 'url'=>array('admin')),
//);
?>

<h1>Outbox Multiparts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
