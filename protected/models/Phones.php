<?php

/**
 * This is the model class for table "phones".
 *
 * The followings are the available columns in table 'phones':
 * @property string $ID
 * @property string $UpdatedInDB
 * @property string $InsertIntoDB
 * @property string $TimeOut
 * @property string $Send
 * @property string $Receive
 * @property string $IMEI
 * @property string $Client
 * @property integer $Battery
 * @property integer $Signal
 * @property integer $Sent
 * @property integer $Received
 */
class Phones extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Phones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID, UpdatedInDB, IMEI, Client', 'required'),
			array('Battery, Signal, Sent, Received', 'numerical', 'integerOnly'=>true),
			array('Send, Receive', 'length', 'max'=>3),
			array('IMEI', 'length', 'max'=>35),
			array('InsertIntoDB, TimeOut', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, UpdatedInDB, InsertIntoDB, TimeOut, Send, Receive, IMEI, Client, Battery, Signal, Sent, Received', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'UpdatedInDB' => 'Updated In Db',
			'InsertIntoDB' => 'Insert Into Db',
			'TimeOut' => 'Time Out',
			'Send' => 'Send',
			'Receive' => 'Receive',
			'IMEI' => 'IMEI',
			'Client' => 'Client',
			'Battery' => 'Battery',
			'Signal' => 'Signal',
			'Sent' => 'Sent',
			'Received' => 'Received',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID,true);
		$criteria->compare('UpdatedInDB',$this->UpdatedInDB,true);
		$criteria->compare('InsertIntoDB',$this->InsertIntoDB,true);
		$criteria->compare('TimeOut',$this->TimeOut,true);
		$criteria->compare('Send',$this->Send,true);
		$criteria->compare('Receive',$this->Receive,true);
		$criteria->compare('IMEI',$this->IMEI,true);
		$criteria->compare('Client',$this->Client,true);
		$criteria->compare('Battery',$this->Battery);
		$criteria->compare('Signal',$this->Signal);
		$criteria->compare('Sent',$this->Sent);
		$criteria->compare('Received',$this->Received);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}