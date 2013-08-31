<?php
/* @var $this PbkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Phone Book',
);

$this->menu=array(
	array('label'=>'Create Phone Book', 'url'=>array('create')),
//	array('label'=>'Manage Pbk', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pbk-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Phone Book</h1>

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
	'id'=>'pbk-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		//'GroupID',
		'Name',
        array('name'=>'Group_Name', 'value'=>'$data->Group->Group_Name' ),
		'Number',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>


