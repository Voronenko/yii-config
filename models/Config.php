<?php

class Config extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Constant the static model class
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
            array('ConfigID, ConfigJSON,', 'required'),
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
			'ConfigID' => 'ID',
			'ConfigJSON' => 'Value',
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

		$criteria->compare('ConfigID',$this->ConfigID,true);
		$criteria->compare('ConfigJSON',$this->ConfigJSON,true);
		$criteria->compare('ConfigChanged',$this->ConfigChanged,true);
		$criteria->compare('ConfigComment',$this->ConfigComment,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria, 'pagination'=>array('pageSize'=>20),
		));
	}

       public function current(){
           $criteria = new CDbCriteria;
           $criteria->order = 'ConfigID desc';
           $criteria->limit = 1;
           return Config::model()->find($criteria);
       }

}