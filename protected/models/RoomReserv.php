<?php

/**
 * This is the model class for table "room_reserv".
 *
 * The followings are the available columns in table 'room_reserv':
 * @property integer $rid
 * @property string $capacity
 * @property string $usedate
 * @property string $tel
 * @property integer $food_id
 * @property string $server
 * @property string $description
 * @property string $status
 * @property string $created
 */
class RoomReserv extends CActiveRecord
{
    public $verifyCode;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'room_reserv';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('capacity, usedate, tel', 'required'),
			array('food_id', 'numerical', 'integerOnly'=>true),
			array('capacity', 'length', 'max'=>10),
			array('usedate', 'length', 'max'=>255),
			array('tel', 'length', 'max'=>20),
			array('server', 'length', 'max'=>3),
			array('status', 'length', 'max'=>7),
                        array('food_id, server, description, status, created', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rid, capacity, usedate, tel, food_id, server, description, status, created', 'safe', 'on'=>'search'),
                    // verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
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
			'rid' => 'ID',
			'capacity' => 'จำนวนผู้อบรม',
			'usedate' => 'วันที่ใช้งาน',
			'tel' => 'เบอร์ติดต่อ',
			'food_id' => 'อาหารว่าง',
			'server' => 'ติดตั้ง Server เพิ่ม',
			'description' => 'รายละเอียดเพิ่มเติม',
			'status' => 'สถานะ',
			'created' => 'Created',
                        'verifyCode'=>'กรุณากรอกรหัสยืนยัน',
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

		$criteria->compare('rid',$this->rid);
		$criteria->compare('capacity',$this->capacity,true);
		$criteria->compare('usedate',$this->usedate,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('food_id',$this->food_id);
		$criteria->compare('server',$this->server,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RoomReserv the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
