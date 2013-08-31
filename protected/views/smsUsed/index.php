<?php
/* @var $this SmsUsedController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sms Useds',
);

$this->menu=array(
	array('label'=>'Create SmsUsed', 'url'=>array('create')),
	array('label'=>'Manage SmsUsed', 'url'=>array('admin')),
);
?>

<h1>Sms Useds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
