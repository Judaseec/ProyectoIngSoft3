<?php
/* @var $this RubrosController */
/* @var $model Rubros */

$this->breadcrumbs=array(
	'Rubros'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Rubros', 'url'=>array('index')),
	array('label'=>'Administrar Rubros', 'url'=>array('admin')),
);
?>

<h1>Crear Rubros</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>