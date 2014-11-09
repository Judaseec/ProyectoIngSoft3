<?php
/* @var $this AreastematicasController */
/* @var $model Areastematicas */

$this->breadcrumbs=array(
	'Areastematicases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Areastematicas', 'url'=>array('index')),
	array('label'=>'Manage Areastematicas', 'url'=>array('admin')),
);
?>

<h1>Create Areastematicas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>