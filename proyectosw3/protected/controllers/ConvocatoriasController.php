<?php

class ConvocatoriasController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','buscarConvocatoria'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Convocatorias;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Convocatorias']))
		{
			$model->attributes=$_POST['Convocatorias'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idConvocatoria));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Convocatorias']))
		{
			$model->attributes=$_POST['Convocatorias'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idConvocatoria));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Convocatorias');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Convocatorias('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Convocatorias']))
			$model->attributes=$_GET['Convocatorias'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Convocatorias the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Convocatorias::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Convocatorias $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='convocatorias-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionBuscarConvocatoria()
	{
		$model=new Convocatorias;
		$dataProvider=new CActiveDataProvider('Convocatorias');
		$this->render('buscarConvocatoria',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
		));

		//if (isset($_POST['Convocatorias'])) 
		//{
		//	$areaTematica = $_POST['Convocatorias']['programaNacional'];
		//	echo $areaTematica;
		//}

		//$array['nombre'] = $_POST['Convocatorias']['nombre'];
		//$array['idConvocatoria'] = $_POST['Convocatorias']['idConvocatoria'];
		//$array['areaTematica'] = $_POST['Convocatorias']['areaTematica'];
		//$array['programaNacional'] = $_POST['Convocatorias']['programaNacional'];
		//$array['entidad'] = $_POST['Convocatorias']['entidad'];
	
		//$array['fechaApertura'] = $_POST['Convocatorias']['fechaApertura'];
		//$array['fechaCierre'] = $_POST['Convocatorias']['fechaCierre'];

		//array["nombre"] = $_post['nombre']
		//array["asd"] = $_post['nombreasd']
		//array["asd"] = $_post['nombresss']
		//array["asd"] = $_post['nombresss']

		//$data['nombre']=$_post['nombre']
		//$data['apellido']=$_post['apellido']
		//$entidad = $_POST['Convocatorias']['entidad'];
		//echo $entidad;
		//echo $_POST['Convocatorias']['fechaCierre'];
		//if (isset($_POST['Convocatorias'])) 
		//{
		//	$nombre = $_POST['Convocatorias']['nombre'];
		//	echo $nombre;
		//}

		//$respuesta = $model -> buscarConvocatoria($array);
		//$email = Yii::app()->db->createCommand($respuesta)->queryAll();
		//echo $respuesta;
		//var_dump($email);

	}

	public function actionBuscar()
	{
		$model = new Convocatorias;

		if (isset($_POST['Convocatorias'])) 
		{
			$nombre = $_POST['Convocatorias']['nombre'];

		}

		
	}

	/*public function actionRecuperarContrasena() {

        $model = new Usuario;

        if (isset($_POST['Usuario'])) {
            $correo = $_POST['Usuario']['correo'];
            $respuesta = $this->enviarRecuperacionCorreo($correo);
            Yii::app()->user->setFlash('Correo', $respuesta);
            $this->refresh();
        }
        $this->render('recuperar', array(
            'model' => $model,
        ));
    }*/
}
