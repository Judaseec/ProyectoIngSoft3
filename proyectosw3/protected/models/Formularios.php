<?php

/**
 * This is the model class for table "formularios".
 *
 * The followings are the available columns in table 'formularios':
 * @property integer $idFormulario
 * @property string $nombreInstitucionPregrado
 * @property string $pregrado
 * @property string $nombrePrograma
 * @property double $promedioNotas
 * @property string $tituloObtenido
 * @property string $Estado
 * @property integer $convocatoria
 *
 * The followings are the available model relations:
 * @property Convocatorias $convocatoria0
 */
class Formularios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'formularios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idFormulario, nombreInstitucionPregrado, pregrado, nombrePrograma, promedioNotas, tituloObtenido, Estado, convocatoria', 'required'),
			array('idFormulario, convocatoria', 'numerical', 'integerOnly'=>true),
			array('promedioNotas', 'numerical'),
			array('nombreInstitucionPregrado, pregrado, nombrePrograma, tituloObtenido, Estado', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idFormulario, nombreInstitucionPregrado, pregrado, nombrePrograma, promedioNotas, tituloObtenido, Estado, convocatoria', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idFormulario' => 'Id Formulario',
			'nombreInstitucionPregrado' => 'Nombre Institucion Pregrado',
			'pregrado' => 'Pregrado',
			'nombrePrograma' => 'Nombre Programa',
			'promedioNotas' => 'Promedio Notas',
			'tituloObtenido' => 'Titulo Obtenido',
			'Estado' => 'Estado',
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

		$criteria->compare('idFormulario',$this->idFormulario);
		$criteria->compare('nombreInstitucionPregrado',$this->nombreInstitucionPregrado,true);
		$criteria->compare('pregrado',$this->pregrado,true);
		$criteria->compare('nombrePrograma',$this->nombrePrograma,true);
		$criteria->compare('promedioNotas',$this->promedioNotas);
		$criteria->compare('tituloObtenido',$this->tituloObtenido,true);
		$criteria->compare('Estado',$this->Estado,true);
		$criteria->compare('convocatoria',$this->convocatoria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Formularios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
