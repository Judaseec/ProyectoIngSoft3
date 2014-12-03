<?php
/* @var $this ConvocatoriasController */
/* @var $model Convocatorias */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Convocatorias', 'url'=>array('index')),
	array('label'=>'Administrar Convocatorias', 'url'=>array('admin')),
);
?>

<h1>Crear Convocatorias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>