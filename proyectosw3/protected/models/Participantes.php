<?php

/**
 * This is the model class for table "participantes".
 *
 * The followings are the available columns in table 'participantes':
 * @property integer $numero
 * @property integer $rol
 * @property string $nombreParticipante
 * @property integer $documento
 * @property integer $convocatoria
 *
 * The followings are the available model relations:
 * @property Convocatorias $convocatoria0
 * @property Tipodocumentos $documento0
 * @property Roles $rol0
 */
class Participantes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'participantes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero, rol, nombreParticipante, documento, convocatoria', 'required'),
			array('numero, rol, documento, convocatoria', 'numerical', 'integerOnly'=>true),
			array('nombreParticipante', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('numero, rol, nombreParticipante, documento, convocatoria', 'safe', 'on'=>'search'),
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
			'convocatoria0' => array(self::BELONGS_TO, 'Convocatorias', 'convocatoria'),
			'documento0' => array(self::BELONGS_TO, 'Tipodocumentos', 'documento'),
			'rol0' => array(self::BELONGS_TO, 'Roles', 'rol'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'numero' => 'Numero',
			'rol' => 'Rol',
			'nombreParticipante' => 'Nombre Participante',
			'documento' => 'Documento',
			'convocatoria' => 'Convocatoria',
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

		$criteria->compare('numero',$this->numero);
		$criteria->compare('rol',$this->rol);
		$criteria->compare('nombreParticipante',$this->nombreParticipante,true);
		$criteria->compare('documento',$this->documento);
		$criteria->compare('convocatoria',$this->convocatoria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Participantes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
