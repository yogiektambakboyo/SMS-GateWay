<?php /* @var $this Controller */?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<!-- blueprint CSS framework -->
    
    
    
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.pnotify.default.css" />    
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />    
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<?php  
    //Yii::app()->clientScript->registerScriptFile(
    //Yii::app()->baseUrl.'/js/sweeper.js');
    Yii::app()->clientScript->registerScriptFile(
    Yii::app()->baseUrl.'/js/socket.io/socket.io.js');
    Yii::app()->clientScript->registerScriptFile(
    Yii::app()->baseUrl.'/js/daemon_client.js');
    
    Yii::app()->clientScript->registerScriptFile(
    Yii::app()->baseUrl.'/js/jquery.pnotify.min.js');    
    
    ?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>


 <?php   

    if(Yii::app()->user->name!='Guest')
    {
        require"header.php";
      echo '<div id=page>';
        require "side-menu.php";
        require "content.php";       
      echo '</div><!-- page -->';
        require "footer.php";
        
    }
    else{
      echo $content;  
    }    
?>
</body>

</html>
