<?php
/* @var $this OutboxSlaveController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Outbox',
);

//$this->menu=array(
//	array('label'=>'Create OutboxSlave', 'url'=>array('create')),
//	array('label'=>'Manage OutboxSlave', 'url'=>array('admin')),
//);

    Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#outbox-slave-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Outbox</h1>

<?php 
//$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); 
?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'outbox-slave-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'UpdatedInDB',
		'InsertIntoDB',
		'SendingDateTime',
		'SendBefore',
		'SendAfter',
		'Text',
        'TextDecoded',
		/*
		'DestinationNumber',
		'Coding',
		'UDH',
		'Class',
		
		'ID',
		'MultiPart',
		'RelativeValidity',
		'SenderID',
		'SendingTimeOut',
		'DeliveryReport',
		'CreatorID',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
