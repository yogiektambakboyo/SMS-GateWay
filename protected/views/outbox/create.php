<?php
/* @var $this OutboxController */
/* @var $model Outbox */

$this->breadcrumbs=array(
	'Compose'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List Outbox', 'url'=>array('index')),
	array('label'=>'Manage Outbox', 'url'=>array('admin')),
);
*/
?>

<h1>Create Message</h1>

<?php if (!empty($_GET['DesNum'])){
            $DesNum=$_GET['DesNum'];
            $DesNum = preg_replace('/\s+/', '+', $DesNum);
        }
        else
        {
            $DesNum = '';
        }
     
     if (!empty($_GET['TexDec'])){
            $TexDec=$_GET['TexDec'];
             }else{$TexDec = '';
             } 
             
?>

<?php echo $this->renderPartial('_form', array('model'=>$model,'DesNum'=>$DesNum, 'TexDec'=>$TexDec)); ?>