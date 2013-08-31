<?php
/* @var $this OutboxController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Outboxes',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#outbox-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");


//$this->menu=array(
	//array('label'=>'Create Outbox', 'url'=>array('create')),
	//array('label'=>'Manage Outbox', 'url'=>array('admin')),
//);

?>


<h1>Outboxes</h1>

<?php 
/*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));/*/
?>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'outbox-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'UpdatedInDB',
		'InsertIntoDB',
		'SendingDateTime',
		'SendBefore',
		'SendAfter',
        'TextDecoded',
		'DestinationNumber',
		/*
		
		'Coding',
		'UDH',
		'Class',
		'Text',
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
            'template'=>'{view} {delete}',
		),
	),
)); ?>
