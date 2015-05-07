<?php

/**
 * This is the model class for table "room".
 *
 * The followings are the available columns in table 'room':
 * @property string $roomid
 * @property string $roomname
 * @property string $capacity
 * @property string $description
 * @property string $color
 * @property string $img
 * @property string $created
 */
class Room extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'room';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('roomid, roomname, capacity', 'required'),
			array('roomid', 'length', 'max'=>20),
			array('roomname, capacity, color', 'length', 'max'=>255),
			array('description, img, created', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('roomid, roomname, capacity, description, color, img, created', 'safe', 'on'=>'search'),
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
			'roomid' => 'รหัสห้อง',
			'roomname' => 'ชื่อห้อง',
			'capacity' => 'ความจุ(คน)',
			'description' => 'รายละเอียด',
			'color' => 'สีประจำห้อง',
			'img' => 'รูปภาพ',
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

		$criteria->compare('roomid',$this->roomid,true);
		$criteria->compare('roomname',$this->roomname,true);
		$criteria->compare('capacity',$this->capacity,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('color',$this->color,true);
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
	 * @return Room the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public static function getDropdown(){
            return CHtml::listData(Room::model()->findAll(),'roomid','roomname');
            //return TbHtml::listData(Category::model()->findAll(),'category_id','category_name');
        }
}
