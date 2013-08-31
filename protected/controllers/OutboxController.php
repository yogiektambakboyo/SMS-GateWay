<?php

class OutboxController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('login','logout'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','index','login','logout','view','error'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('index','login','logout','admin','view','delete','update','create','error'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		 
        $model=new Outbox;
        $modelSlave=new OutboxSlave;
        $success='false';
        $DesNum = '';
        $TexDec = '';
        // Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Outbox']))
		{
			$pesan=$_POST['Outbox']['TextDecoded'];
            
            //Check For Long SMS
            // menghitung jumlah pecahan
            $jmlSMS = ceil(strlen($pesan)/153);
            // memecah pesan asli
            $pecah  = str_split($pesan, 153);
            //membuat Referensi Pesan
            $ref=$this->dechex_str(mt_rand(1,255));
            if($jmlSMS==1){
                $model->attributes=$_POST['Outbox'];
                $modelSlave->attributes=$_POST['Outbox'];
                if($model->save()&&$modelSlave->save())
				    $this->redirect(array('/OutboxSlave/view','id'=>$modelSlave->ID));                
            }
            else{
                $_POST['Outbox']['MultiPart']='true'; 
                for ($i=1; $i<=$jmlSMS; $i++)
                {
                    $pre='050003';
                    $_POST['Outbox']['UDH']=$pre.$ref.sprintf("%02s",$jmlSMS).sprintf("%02s", $i);
                    $msg = $pecah[$i-1];
                    $_POST['Outbox']['TextDecoded']=$msg;
                    
                    if ($i == 1)
                    {
                       // jika merupakan pecahan pertama, maka masukkan ke tabel OUTBOX
                        
                        $model->attributes=$_POST['Outbox'];
                        $model->save();
                        $_POST['Outbox']['TextDecoded']=$pesan;
                        $modelSlave->attributes=$_POST['Outbox'];
                        $modelSlave->save();
		      		    //$this->redirect(array('view','id'=>$model->ID));
                    }else
                        {
                            $id_u=$model->ID;
                            $model=new OutboxMultipart;
                            $_POST['Outbox']['SequencePosition']=$i;
                            $_POST['Outbox']['ID']=$id_u;
                            $model->attributes=$_POST['Outbox'];
                            if($model->save()){
                                $success='true';
                            }
		      		    // jika bukan merupakan pecahan pertama, simpan ke tabel OUTBOX_MULTIPART
                        }

                    

                }
                if($success=='true')
                {
                $this->redirect(array('/OutboxSlave/view','id'=>$modelSlave->ID));
                }
            }
                   
		}

		$this->render('create',array(
			'model'=>$model,'DesNum'=>$DesNum, 'TexDec'=>$TexDec
		));
	}

    private function dechex_str($ref)
    {
        return ($ref <= 15 )?'0'.dechex($ref):dechex($ref);
    }


	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Outbox']))
		{
			$model->attributes=$_POST['Outbox'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Outbox('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Outbox']))
			$model->attributes=$_GET['Outbox'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 
	public function actionAdmin()
	{
		$model=new Outbox('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Outbox']))
			$model->attributes=$_GET['Outbox'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
    */
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Outbox the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Outbox::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Outbox $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='outbox-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
