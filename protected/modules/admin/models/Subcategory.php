<?php

/**
 * This is the model class for table "tbl_subcategory".
 *
 * The followings are the available columns in table 'tbl_subcategory':
 * @property string $sub_cat_id
 * @property string $sub_name
 * @property string $sub_desc
 * @property string $added_by
 */
class Subcategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Subcategory the static model class
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
		return 'tbl_subcategory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('added_by', 'required'),
			array('sub_name, sub_desc', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('sub_cat_id, sub_name, sub_desc, added_by', 'safe', 'on'=>'search'),
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
			'sub_cat_id' => 'Sub Cat',
			'sub_name' => 'Sub Name',
			'sub_desc' => 'Sub Desc',
			'added_by' => 'Added By',
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

		$criteria->compare('sub_cat_id',$this->sub_cat_id,true);
		$criteria->compare('sub_name',$this->sub_name,true);
		$criteria->compare('sub_desc',$this->sub_desc,true);
		$criteria->compare('added_by',$this->added_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}