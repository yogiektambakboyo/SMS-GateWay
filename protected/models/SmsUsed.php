<?php

/**
 * This is the model class for table "sms_used".
 *
 * The followings are the available columns in table 'sms_used':
 * @property integer $id_sms_used
 * @property string $sms_date
 * @property integer $id_user
 * @property integer $out_sms_count
 * @property integer $in_sms_count
 */
class SmsUsed extends AltActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SmsUsed the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return CDbConnection database connection
	 */
	public function getDbConnection()
	{
		return Yii::app()->dbslave;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sms_used';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sms_date, id_user', 'required'),
			array('id_user, out_sms_count, in_sms_count', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_sms_used, sms_date, id_user, out_sms_count, in_sms_count', 'safe', 'on'=>'search'),
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
			'id_sms_used' => 'Id Sms Used',
			'sms_date' => 'Sms Date',
			'id_user' => 'Id User',
			'out_sms_count' => 'Out Sms Count',
			'in_sms_count' => 'In Sms Count',
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

		$criteria->compare('id_sms_used',$this->id_sms_used);
		$criteria->compare('sms_date',$this->sms_date,true);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('out_sms_count',$this->out_sms_count);
		$criteria->compare('in_sms_count',$this->in_sms_count);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}