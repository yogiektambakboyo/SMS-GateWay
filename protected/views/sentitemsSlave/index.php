<?php
/* @var $this SentitemsSlaveController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sentitems',
);

//$this->menu=array(
//	array('label'=>'Create SentitemsSlave', 'url'=>array('create')),
//	array('label'=>'Manage SentitemsSlave', 'url'=>array('admin')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sentitems-slave-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Sent Items</h1>

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
<?php echo CHtml::beginForm(array('SentitemsSlave/Checked'),'post'); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sentitems-slave-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'selectableRows'=>'2',
	'columns'=>array(
		'UpdatedInDB',
		'InsertIntoDB',
		'SendingDateTime',
		'TextDecoded',
		'DestinationNumber',
        'Status',
        array(
        'class'=>'CCheckBoxColumn',
        
        'id'=>'autoId',  
        ),
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


<div id="del">Action for checkbox : 
<?php echo CHtml::submitButton('Delete', array('class' => 'button','confirm' => 'Are you sure you want to permanently delete these messages?'));
?>
</div>
<?php echo CHtml::endForm(); ?>
