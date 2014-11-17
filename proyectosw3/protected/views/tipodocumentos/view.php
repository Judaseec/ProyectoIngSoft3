<?php
/* @var $this TipodocumentosController */
/* @var $model Tipodocumentos */

$this->breadcrumbs=array(
	'Tipodocumentoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tipodocumentos', 'url'=>array('index')),
	array('label'=>'Create Tipodocumentos', 'url'=>array('create')),
	array('label'=>'Update Tipodocumentos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tipodocumentos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipodocumentos', 'url'=>array('admin')),
);
?>

<h1>View Tipodocumentos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
