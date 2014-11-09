<?php
/* @var $this FormulariosController */
/* @var $model Formularios */

$this->breadcrumbs=array(
	'Formularioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Formularios', 'url'=>array('index')),
	array('label'=>'Manage Formularios', 'url'=>array('admin')),
);
?>

<h1>Create Formularios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>