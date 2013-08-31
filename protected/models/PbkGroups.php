<?php

/**
 * This is the model class for table "pbk_groups".
 *
 * The followings are the available columns in table 'pbk_groups':
 * @property string $Name
 * @property integer $ID
 */
class PbkGroups extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PbkGroups the static model class
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
		return 'pbk_groups';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Group_Name', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Group_Name, ID', 'safe', 'on'=>'search'),
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
			'Group_Name' => 'Group_Name',
			'ID' => 'ID',
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

		$criteria->compare('Group_Name',$this->Group_Name,true);
		$criteria->compare('ID',$this->ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}