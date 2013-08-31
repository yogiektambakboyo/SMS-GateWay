<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<!-- blueprint CSS framework -->
	
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
    <!--</a><script src="<?php echo Yii::app()->request->baseUrl; ?>/js/socket.io/socket.io.js"></script>
    <script>
        var socket = io.connect('http://localhost:8000/');
        socket.on('InboxNotify', function (data) {console.log('hello Server');});
    </script>
    -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />    
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<section class="main"> 
				<form class="form-1" method="GET" action="">
                    <div id="field_header">
						Identification
						<i class="icon-legal icon-large"></i>
                        </div>
					<p class="field">
						<input type="text" name="login" placeholder="Username"/>
						<i class="icon-user icon-large"></i>
					</p>
					<p class="field">
							<input type="password" name="password" placeholder="Password"/>
							<i class="icon-lock icon-large"></i>
					</p>
                    <p class="fields">
                        <input type="checkbox" name="remember"/> Remember Me                    
                    </p>
					<p class="submit">
						<button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
					</p>
				</form>
			</section>

<div id="header">
		<div id="logo"></div>
	</div><!-- header -->    
    
<div id="page">

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Dashboard', 'url'=>array('site/index')),
				array('label'=>'Compose', 'url'=>array('/outbox/create')),
				array('label'=>'Inbox', 'url'=>array('/inbox')),
				array('label'=>'Outbox', 'url'=>array('/outbox')),
				//array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Send Item', 'url'=>array('/sentitems'))
			),
            'id'=>'compose',
		)); ?>
	</div><!-- mainmenu -->
    
    
	<div id="contente">
    	<?php echo $content; ?>
	</div><!-- content-->
    
	<div class="clear"></div>

	<?php  
    Yii::app()->clientScript->registerScriptFile(
    Yii::app()->baseUrl.'/js/socket.io/socket.io.js');
    Yii::app()->clientScript->registerScriptFile(
    Yii::app()->baseUrl.'/js/daemon_client.js');
    
    ?>

</div><!-- page -->
<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by PT. Karunia Indah Cahaya.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</body>
</html>
