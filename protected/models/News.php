<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property integer $news_id
 * @property string $news_mem_id
 * @property string $news_topic
 * @property string $news_detail
 * @property string $news_create_date
 * @property string $news_update_date
 * @property string $news_status
 */
class News extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('news_mem_id, news_topic, news_create_date, news_update_date, news_status', 'required'),
			array('news_mem_id', 'length', 'max'=>4),
			array('news_topic', 'length', 'max'=>100),
			array('news_status', 'length', 'max'=>1),
			array('news_detail', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('news_id, news_mem_id, news_topic, news_detail, news_create_date, news_update_date, news_status', 'safe', 'on'=>'search'),
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
			'news_id' => 'News',
			'news_mem_id' => 'News Mem',
			'news_topic' => 'News Topic',
			'news_detail' => 'News Detail',
			'news_create_date' => 'News Create Date',
			'news_update_date' => 'News Update Date',
			'news_status' => 'News Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('news_id',$this->news_id);
		$criteria->compare('news_mem_id',$this->news_mem_id,true);
		$criteria->compare('news_topic',$this->news_topic,true);
		$criteria->compare('news_detail',$this->news_detail,true);
		$criteria->compare('news_create_date',$this->news_create_date,true);
		$criteria->compare('news_update_date',$this->news_update_date,true);
		$criteria->compare('news_status',$this->news_status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return News the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
