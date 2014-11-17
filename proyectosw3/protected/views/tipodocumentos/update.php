<?php
/* @var $this TipodocumentosController */
/* @var $model Tipodocumentos */

$this->breadcrumbs=array(
	'Tipodocumentoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipodocumentos', 'url'=>array('index')),
	array('label'=>'Create Tipodocumentos', 'url'=>array('create')),
	array('label'=>'View Tipodocumentos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tipodocumentos', 'url'=>array('admin')),
);
?>

<h1>Update Tipodocumentos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>