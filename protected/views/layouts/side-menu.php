	<div id="mainmenu">
    <?php    
    $sql = Yii::app()->dbslave->createCommand()
    ->select('*')
    ->from('inbox')
    ->text;
    $count=Yii::app()->dbslave->createCommand('SELECT COUNT(*) FROM inbox where readed="false"')->queryScalar();
    $dataProviders=new CSqlDataProvider($sql, array(
    'totalItemCount'=>$count,));
    $unread=$dataProviders->totalItemCount;
    ?>
        
        <?php $this->widget('zii.widgets.TbMenu', array(
    'type'=>'list',
    'items'=>array(
        array('label'=>'Dashboard', 'icon'=>'home', 'url'=>array('site/index')),
        array('label'=>'Compose', 'icon'=>'pencil','url'=>array('/outbox/create')),
        array('label'=>$unread>0 ? 'Inbox'.' ('.$unread.')':'Inbox', 'icon'=>'refresh', 'url'=>array('/InboxSlave')),
		array('label'=>'Outbox','icon'=>'cog', 'url'=>array('/OutboxSlave')),
				//array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
		array('label'=>'Send Item', 'icon'=>'flag', 'url'=>array('/SentitemsSlave')),
        array('label'=>'Phonebook','icon'=>'book','url'=>array('/Pbk/index')),
    ),
)); ?>
        
        
	</div><!-- mainmenu -->