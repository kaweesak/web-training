<?php

/**
 * This is the model class for table "courseregis".
 *
 * The followings are the available columns in table 'courseregis':
 * @property integer $registerid
 * @property integer $copenid
 * @property string $course_id
 * @property string $stucode
 * @property string $fname
 * @property string $lname
 * @property string $faculity
 * @property string $major
 * @property string $address
 * @property string $phone
 * @property string $score
 * @property string $status
 * @property string $created
 */
class Courseregis extends CActiveRecord
{
    public $verifyCode;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'courseregis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fname, lname, phone', 'required'),
			array('copenid', 'numerical', 'integerOnly'=>true),
			array('course_id', 'length', 'max'=>10),
			array('stucode, phone', 'length', 'max'=>20),
			array('fname, lname, faculity, major, score', 'length', 'max'=>255),
			array('status', 'length', 'max'=>7),
			array('address, created', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('registerid, copenid, course_id, stucode, fname, lname, faculity, major, address, phone, score, status, created', 'safe', 'on'=>'search'),
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
			'registerid' => 'Registerid',
			'copenid' => 'Copenid',
			'course_id' => 'Course',
			'stucode' => 'รหัสนักศึกษา',
			'fname' => 'ชื่อ',
			'lname' => 'นามสกุล',
			'faculity' => 'คณะ',
			'major' => 'สาขา',
			'address' => 'ที่อยู่(สำหรับออกใบเสร็จ)',
			'phone' => 'เบอร์โทรศัพท์',
			'score' => 'คะแนน',
			'status' => 'สถานะ',
			'created' => 'วันที่สมัคร',
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

		$criteria->compare('registerid',$this->registerid);
		$criteria->compare('copenid',$this->copenid);
		$criteria->compare('course_id',$this->course_id,true);
		$criteria->compare('stucode',$this->stucode,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('faculity',$this->faculity,true);
		$criteria->compare('major',$this->major,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('score',$this->score,true);
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
	 * @return Courseregis the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
