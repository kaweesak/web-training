<?php

/**
 * This is the model class for table "course".
 *
 * The followings are the available columns in table 'course':
 * @property string $course_id
 * @property string $course_name
 * @property integer $category_id
 * @property string $description
 * @property string $course_detail
 * @property string $duration
 * @property string $price
 * @property string $status
 * @property string $img
 * @property string $created
 */
class Course extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'course';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('course_id', 'required'),
			array('category_id', 'numerical', 'integerOnly'=>true),
			array('course_id, duration, price', 'length', 'max'=>10),
			array('course_name', 'length', 'max'=>255),
			array('status', 'length', 'max'=>5),
			array('description, course_detail, img, created', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('course_id, course_name, category_id, description, course_detail, duration, price, status, img, created', 'safe', 'on'=>'search'),
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
                    'category'=>array(self::BELONGS_TO,'Category','category_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'course_id' => 'Course',
			'course_name' => 'Course Name',
			'category_id' => 'Category',
			'description' => 'Description',
			'course_detail' => 'Course Detail',
			'duration' => 'Duration',
			'price' => 'Price',
			'status' => 'Status',
			'img' => 'Img',
			'created' => 'Created',
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

		$criteria->compare('course_id',$this->course_id,true);
		$criteria->compare('course_name',$this->course_name,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('course_detail',$this->course_detail,true);
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Course the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public static function getDropdown(){
            return CHtml::listData(Course::model()->findAll(),'course_id','course_name');            
        }
}
