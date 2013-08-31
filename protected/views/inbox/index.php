<?php
/* @var $this InboxController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inboxes',
);
?>


<?php
	Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
	});
	$('.search-form form').submit(function(){
	$('#inbox-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
	});
	");
?>
<h1>Inboxes</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php echo CHtml::beginForm(array('inbox/Checked'),'post'); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inbox-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'selectableRows'=>'2',
    'rowCssClassExpression'=>'$data->Readed=="false" ? "bold ". ($row%2 ? "even" : "odd") : ($row%2 ? "even" : "odd")',
	'columns'=>array(
		'UpdatedInDB',
		'ReceivingDateTime',
        
		//'Text',
		'SenderNumber',
		'TextDecoded',
        array(
        'class'=>'CCheckBoxColumn',
        
        'id'=>'autoId',  
        ),
		//'Coding',
		//'UDH',
		/*
		'SMSCNumber',
		'Class',
		'ID',
		'RecipientID',
		'Processed',
		*/
		array(
			'class'=>'CButtonColumn',
            'template'=>'{view}{delete}',
		),
	),
)); 

?>
<div id="del">Action for checkbox : 
<?php echo CHtml::submitButton('Delete', array('class' => 'button','confirm' => 'Are you sure you want to permanently delete these messages?'));
?>
</div>
<?php echo CHtml::endForm(); ?>

