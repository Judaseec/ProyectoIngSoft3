<?php
/* @var $this TipologiasController */
/* @var $model Tipologias */

$this->breadcrumbs=array(
	'Tipologiases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tipologias', 'url'=>array('index')),
	array('label'=>'Manage Tipologias', 'url'=>array('admin')),
);
?>

<h1>Create Tipologias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>