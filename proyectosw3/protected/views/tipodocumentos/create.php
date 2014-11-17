<?php
/* @var $this TipodocumentosController */
/* @var $model Tipodocumentos */

$this->breadcrumbs=array(
	'Tipodocumentoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tipodocumentos', 'url'=>array('index')),
	array('label'=>'Manage Tipodocumentos', 'url'=>array('admin')),
);
?>

<h1>Create Tipodocumentos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>