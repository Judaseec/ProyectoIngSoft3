<?php

/**
 * This is the model class for table "productos".
 *
 * The followings are the available columns in table 'productos':
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property integer $tipologia
 * @property integer $cantidad
 * @property integer $beneficiario
 * @property integer $producto
 *
 * The followings are the available model relations:
 * @property Beneficiarios $beneficiario0
 * @property Producto $producto0
 * @property Tipologias $tipologia0
 */
class Productos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, nombre, descripcion, tipologia, cantidad, beneficiario, producto', 'required'),
			array('id, tipologia, cantidad, beneficiario, producto', 'numerical', 'integerOnly'=>true),
			array('nombre, descripcion', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, descripcion, tipologia, cantidad, beneficiario, producto', 'safe', 'on'=>'search'),
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
			'beneficiario0' => array(self::BELONGS_TO, 'Beneficiarios', 'beneficiario'),
			'producto0' => array(self::BELONGS_TO, 'Producto', 'producto'),
			'tipologia0' => array(self::BELONGS_TO, 'Tipologias', 'tipologia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'tipologia' => 'Tipologia',
			'cantidad' => 'Cantidad',
			'beneficiario' => 'Beneficiario',
			'producto' => 'Producto',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('tipologia',$this->tipologia);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('beneficiario',$this->beneficiario);
		$criteria->compare('producto',$this->producto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Productos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
