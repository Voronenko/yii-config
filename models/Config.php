<?php

class Config extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Config the static model class
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
		return 'configmigrations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('ConfigJSON, ConfigChanged, ConfigComment', 'required'),
            array('ConfigID, ConfigJSON, ConfigChanged, ConfigComment', 'safe', 'on'=>'search'),
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
			'ConfigID' => 'Config ID',
			'ConfigJSON' => 'JSON',
			'ConfigChanged' => 'Changed',
			'ConfigComment' => 'Comment',
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

		$criteria->compare('ConfigName',$this->ConfigName,true);
		$criteria->compare('ConfigValue',$this->ConfigValue,true);
		$criteria->compare('ConfigDesc',$this->ConfigDesc,true);
		$criteria->compare('ConfigGroup',$this->ConfigGroup,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria, 'pagination'=>array('pageSize'=>20),
		));
	}


    public function primaryKey()
    {
        return 'ConfigID';
    }


    public function current(){
		$criteria=new CDbCriteria;
        $criteria->order = 'ConfigID desc';
        return Config::model()->find($criteria)->ConfigJSON;
       }	

}