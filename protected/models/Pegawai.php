<?php

/**
 * This is the model class for table "{{pegawai}}".
 *
 * The followings are the available columns in table '{{pegawai}}':
 * @property integer $ID
 * @property string $NIP_LAMA
 * @property string $NIP_BARU
 * @property string $NAMA
 * @property integer $TEMPAT_LAHIR
 * @property string $TANGGAL_LAHIR
 * @property string $ALAMAT
 * @property integer $UNIT_ESELON3
 * @property integer $UNIT_ESELON4
 * @property integer $JABATAN
 * @property string $USERNAME
 * @property string $PASSWORD
 */
class Pegawai extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{pegawai}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NIP_LAMA, NIP_BARU, NAMA, JABATAN, USERNAME, PASSWORD', 'required'),
			array('TEMPAT_LAHIR, UNIT_ESELON3, UNIT_ESELON4, JABATAN', 'numerical', 'integerOnly'=>true),
			array('NIP_LAMA', 'length', 'max'=>9),
			array('NIP_BARU', 'length', 'max'=>18),
			array('NAMA, PASSWORD', 'length', 'max'=>50),
			array('ALAMAT', 'length', 'max'=>100),
			array('USERNAME', 'length', 'max'=>20),
			array('TANGGAL_LAHIR', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, NIP_LAMA, NIP_BARU, NAMA, TEMPAT_LAHIR, TANGGAL_LAHIR, ALAMAT, UNIT_ESELON3, UNIT_ESELON4, JABATAN, USERNAME, PASSWORD', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'NIP_LAMA' => 'Nip Lama',
			'NIP_BARU' => 'Nip Baru',
			'NAMA' => 'Nama',
			'TEMPAT_LAHIR' => 'Tempat Lahir',
			'TANGGAL_LAHIR' => 'Tanggal Lahir',
			'ALAMAT' => 'Alamat',
			'UNIT_ESELON3' => 'Unit Eselon3',
			'UNIT_ESELON4' => 'Unit Eselon4',
			'JABATAN' => 'Jabatan',
			'USERNAME' => 'Username',
			'PASSWORD' => 'Password',
		);
	}

	public function validatePassword($password)
	{
		return $this->hashPassword($password)===$this->PASSWORD;
	}

	/**
	 * Generates the password hash.
	 * @param string password
	 * @return string hash
	 */
	public function hashPassword($password)
	{
		return md5($password);
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('NIP_LAMA',$this->NIP_LAMA,true);
		$criteria->compare('NIP_BARU',$this->NIP_BARU,true);
		$criteria->compare('NAMA',$this->NAMA,true);
		$criteria->compare('TEMPAT_LAHIR',$this->TEMPAT_LAHIR);
		$criteria->compare('TANGGAL_LAHIR',$this->TANGGAL_LAHIR,true);
		$criteria->compare('ALAMAT',$this->ALAMAT,true);
		$criteria->compare('UNIT_ESELON3',$this->UNIT_ESELON3);
		$criteria->compare('UNIT_ESELON4',$this->UNIT_ESELON4);
		$criteria->compare('JABATAN',$this->JABATAN);
		$criteria->compare('USERNAME',$this->USERNAME,true);
		$criteria->compare('PASSWORD',$this->PASSWORD,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pegawai the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
