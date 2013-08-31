<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<?php //$model=new User;?>
<section class="main"> 
        
                
    <?php $form=$this->beginWidget('CActiveForm', array('id'=>'login-form','enableClientValidation'=>true,'clientOptions'=>array('validateOnSubmit'=>true,),'htmlOptions'=>array('class'=>'form-1','name'=>'login-form'))); ?>
    <div id="field_header">
        Identification
        <i class="icon-legal icon-large"></i>
   </div>
                        
    <div class="field">
		<?php echo $form->textField($model,'username',array('size'=>50,'maxlength'=>50,'placeholder'=>'Username',)); ?>
        <i class="icon-user icon-large"></i>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="field">
		<?php echo $form->passwordField($model,'password',array('size'=>50,'maxlength'=>50,'placeholder'=>'Password',)); ?>
        <i class="icon-lock icon-large"></i>
		<?php echo $form->error($model,'password'); ?>
	</div>
    
    <div class="fields">
		<?php  echo $form->checkBox($model,'rememberMe'); ?>
		<?php  echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
</div>
    
	<div class="submit">
    
		<?php echo CHtml::submitButton('Sign',array('name'=>'submit','type'=>'submit','class'=>'button',)); ?></i>
	</div>
                
    <?php $this->endWidget(); ?>
    </section>
