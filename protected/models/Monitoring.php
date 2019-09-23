<?php

/**
 * This is the model class for table "{{monitoring}}".
 *
 * The followings are the available columns in table '{{monitoring}}':
 * @property integer $ID
 * @property string $NAMA
 * @property integer $TAHUN
 * @property integer $SEM_TRIW
 * @property integer $JENIS
 * @property string $TGL_MULAI
 * @property string $TGL_SELESAI
 * @property integer $BIDANG_BAGIAN
 * @property integer $SEKSI_SUBBAG
 * @property string $PENANGGUNG_JAWAB
 */
class Monitoring extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{monitoring}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NAMA, TAHUN, SEM_TRIW, TGL_MULAI, TGL_SELESAI, BIDANG_BAGIAN, SEKSI_SUBBAG, PENANGGUNG_JAWAB', 'required'),
			array('TAHUN, SEM_TRIW, JENIS, BIDANG_BAGIAN, SEKSI_SUBBAG', 'numerical', 'integerOnly'=>true),
			array('NAMA', 'length', 'max'=>50),
			array('PENANGGUNG_JAWAB', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, NAMA, TAHUN, SEM_TRIW, JENIS, TGL_MULAI, TGL_SELESAI, BIDANG_BAGIAN, SEKSI_SUBBAG, PENANGGUNG_JAWAB', 'safe', 'on'=>'search'),
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
			'NAMA' => 'Nama Kegiatan',
			'TAHUN' => 'Tahun',
			'SEM_TRIW' => 'Semester/Triwulan',
			'JENIS' => 'Cakupan Kegiatan',
			'TGL_MULAI' => 'Tanggal Mulai',
			'TGL_SELESAI' => 'Tanggal Selesai',
			'BIDANG_BAGIAN' => 'Bidang/Bagian',
			'SEKSI_SUBBAG' => 'Seksi/Subbag',
			'PENANGGUNG_JAWAB' => 'Penanggung Jawab',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('NAMA',$this->NAMA,true);
		$criteria->compare('TAHUN',$this->TAHUN);
		$criteria->compare('SEM_TRIW',$this->SEM_TRIW);
		$criteria->compare('JENIS',$this->JENIS);
		$criteria->compare('TGL_MULAI',$this->TGL_MULAI,true);
		$criteria->compare('TGL_SELESAI',$this->TGL_SELESAI,true);
		$criteria->compare('BIDANG_BAGIAN',$this->BIDANG_BAGIAN);
		$criteria->compare('SEKSI_SUBBAG',$this->SEKSI_SUBBAG);
		$criteria->compare('PENANGGUNG_JAWAB',$this->PENANGGUNG_JAWAB,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Monitoring the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
