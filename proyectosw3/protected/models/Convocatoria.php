<?php

/**
 * This is the model class for table "convocatoria".
 *
 * The followings are the available columns in table 'convocatoria':
 * @property integer $idConvocatoria
 * @property string $titulo
 * @property string $a単o
 * @property string $estado
 * @property string $tipo
 * @property string $fechaApertura
 * @property string $fechaCierre
 * @property string $anexos
 * @property string $receptor
 * @property string $programa
 * @property string $entidad
 *
 * The followings are the available model relations:
 * @property Usuario[] $usuarios
 */
class Convocatoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'convocatoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idConvocatoria, titulo, a単o, estado, tipo, fechaApertura, fechaCierre, anexos, receptor, programa, entidad', 'required'),
			array('idConvocatoria', 'numerical', 'integerOnly'=>true),
			array('titulo, estado, tipo, programa, entidad', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idConvocatoria, titulo, a単o, estado, tipo, fechaApertura, fechaCierre, anexos, receptor, programa, entidad', 'safe', 'on'=>'search'),
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
			'usuarios' => array(self::MANY_MANY, 'Usuario', 'registrousuarioconvocatoria(idConvocatoria, idUsuario)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idConvocatoria' => 'Id Convocatoria',
			'titulo' => 'Titulo',
			'a単o' => 'A祓o',
			'estado' => 'Estado',
			'tipo' => 'Tipo',
			'fechaApertura' => 'Fecha Apertura',
			'fechaCierre' => 'Fecha Cierre',
			'anexos' => 'Anexos',
			'receptor' => 'Receptor',
			'programa' => 'Programa',
			'entidad' => 'Entidad',
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

		$criteria->compare('idConvocatoria',$this->idConvocatoria);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('a単o',$this->a単o,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('fechaApertura',$this->fechaApertura,true);
		$criteria->compare('fechaCierre',$this->fechaCierre,true);
		$criteria->compare('anexos',$this->anexos,true);
		$criteria->compare('receptor',$this->receptor,true);
		$criteria->compare('programa',$this->programa,true);
		$criteria->compare('entidad',$this->entidad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Convocatoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
