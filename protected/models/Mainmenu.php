<?php

/**
 * This is the model class for table "{{mainmenu}}".
 *
 * The followings are the available columns in table '{{mainmenu}}':
 * @property integer $id_main
 * @property string $nama_menu
 * @property string $link
 * @property string $aktif
 * @property string $usermenu
 */
class Mainmenu extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{mainmenu}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usermenu', 'required'),
			array('nama_menu', 'length', 'max'=>50),
			array('link', 'length', 'max'=>100),
			array('aktif, usermenu', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_main, nama_menu, link, aktif, usermenu', 'safe', 'on'=>'search'),
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
			'id_main' => 'Id Main',
			'nama_menu' => 'Nama Menu',
			'link' => 'Link',
			'aktif' => 'Aktif',
			'usermenu' => 'Usermenu',
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

		$criteria->compare('id_main',$this->id_main);
		$criteria->compare('nama_menu',$this->nama_menu,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('aktif',$this->aktif,true);
		$criteria->compare('usermenu',$this->usermenu,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mainmenu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
