<?php
/* @var $this ProgramanacionalController */
/* @var $model Programanacional */

$this->breadcrumbs=array(
	'Programanacionals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Programanacional', 'url'=>array('index')),
	array('label'=>'Manage Programanacional', 'url'=>array('admin')),
);
?>

<h1>Create Programanacional</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>