<?php
/* @var $this BeneficiariosController */
/* @var $model Beneficiarios */

$this->breadcrumbs=array(
	'Beneficiarioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Beneficiarios', 'url'=>array('index')),
	array('label'=>'Manage Beneficiarios', 'url'=>array('admin')),
);
?>

<h1>Create Beneficiarios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>