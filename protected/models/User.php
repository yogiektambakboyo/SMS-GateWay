<?php

/**
 * This is the model class for table "_user".
 *
 * The followings are the available columns in table '_user':
 * @property integer $id_user
 * @property string $name
 * @property string $passwd
 * @property string $salt
 * @property string $phone
 * @property string $privilages
 * @property string $email
 * @property string $last_login
 * @property string $ip_adress
 */
class User extends AltActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return '_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, name, passwd, phone, privilages, email', 'required'),
			array('id_user', 'numerical', 'integerOnly'=>true),
			array('name, passwd, email', 'length', 'max'=>50),
			array('phone', 'length', 'max'=>14),
			array('privilages', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_user, name, passwd, salt, phone, privilages, email, last_login, ip_address', 'safe', 'on'=>'search'),
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
			'id_user' => 'Id User',
			'name' => 'Name',
			'passwd' => 'Password',
            'salt'=>'Salt',
			'phone' => 'Phone',
			'privilages' => 'Privilages',
			'email' => 'Email',
			'last_login' => 'Last Login',
            'ip_address'=> 'Ip Address'
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

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('passwd',$this->passwd,true);
        $criteria->compare('salt',$this->salt,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('privilages',$this->privilages,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('last_login',$this->last_login,true);
        $criteria->compare('ip_address',$this->ip_address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    
            // hash password
        public function hashPassword($passwd, $salt)
        {
            return md5($salt.$passwd);
        }
                
        // password validation
        public function validatePassword($passwd)
        {
            return $this->hashPassword($passwd,$this->salt)===$this->passwd;
        }
                
        //generate salt
        public function generateSalt()
        {
            return uniqid('',true);
        }
                
        public function beforeValidate()
        {
            $this->salt = $this->generateSalt();
            return parent::beforeValidate();
        }
                
        public function beforeSave()
        {
            $this->passwd = $this->hashPassword($this->passwd, $this->salt);
            return parent::beforeSave();
        }
    
}