<div id="contente">
    
    <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
    
    	<?php echo $content; ?>
	</div><!-- content-->
    
	<div class="clear"></div>