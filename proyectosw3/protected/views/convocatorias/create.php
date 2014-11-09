<?php
/* @var $this ConvocatoriasController */
/* @var $model Convocatorias */

$this->breadcrumbs=array(
	'Convocatoriases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Convocatorias', 'url'=>array('index')),
	array('label'=>'Manage Convocatorias', 'url'=>array('admin')),
);
?>

<h1>Create Convocatorias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>