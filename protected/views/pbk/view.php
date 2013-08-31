<?php
/* @var $this PbkController */
/* @var $model Pbk */

$this->breadcrumbs=array(
	'Phone Book'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Phone Book', 'url'=>array('index')),
	array('label'=>'Create Phone Book', 'url'=>array('create')),
	array('label'=>'Update Phone Book', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Phone Book', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Pbk', 'url'=>array('admin')),
);
?>
<?php $models=PbkGroups::model()->findByPk($model->GroupID);?>
<h1>View Phone Book #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		//'GroupID',
         array('name'=>'Group_Name','value'=>$models->Group_Name),
		'Name',
		'Number',
	),
)); ?>
