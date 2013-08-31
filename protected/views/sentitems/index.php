<?php
/* @var $this SentitemsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sentitems',
);

/*$this->menu=array(
	array('label'=>'Create Sentitems', 'url'=>array('create')),
	array('label'=>'Manage Sentitems', 'url'=>array('admin')),
);
*/
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sentitems-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?> 

<h1>Sentitems</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sentitems-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'UpdatedInDB',
		'InsertIntoDB',
		'SendingDateTime',
		'TextDecoded',
		'DestinationNumber',
        'Status',
		/*
		'Coding',
		'UDH',
		'SMSCNumber',
		'Class',
		'DeliveryDateTime',
		'ID',
        'Text',
		'SenderID',
		'SequencePosition',
		
		'StatusError',
		'TPMR',
		'RelativeValidity',
		'CreatorID',
		*/
		array(
			'class'=>'CButtonColumn',
            'template'=>'{view} {delete}',

		),
	),
)); ?>

