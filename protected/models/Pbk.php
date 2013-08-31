<?php

/**
 * This is the model class for table "pbk".
 *
 * The followings are the available columns in table 'pbk':
 * @property integer $ID
 * @property integer $GroupID
 * @property string $Name
 * @property string $Number
 */
class Pbk extends AltActiveRecord
{
    public $Group_Name;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pbk the static model class
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
		return 'pbk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Name, Number', 'required'),
			array('GroupID', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, GroupID, Name, Number', 'safe', 'on'=>'search'),
            array( 'xxx,yyy,Group_Name', 'safe', 'on'=>'search' ),
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
        'Group'=>array(self::BELONGS_TO,'PbkGroups','GroupID')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'GroupID' => 'Group',
			'Name' => 'Name',
			'Number' => 'Number',
            'Group_Name'=>'Group Name',
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
        $criteria->with = array( 'Group' );
		$criteria->compare('ID',$this->ID);
		$criteria->compare('GroupID',$this->GroupID);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Number',$this->Number,true);
        $criteria->compare('pbk_groups.Group_Name', $this->Group_Name, true );

		return new CActiveDataProvider('Pbk', array(
			'criteria'=>$criteria,
            'sort'=>array(
            'attributes'=>array(
            'Group_Name'=>array(
                'asc'=>'Group.Group_Name',
                'desc'=>'Group.Group_Name DESC',
            ),
            '*',
        ),
    ),
		));
	}
}