<?php
/* @var $this RequisitosController */
/* @var $model Requisitos */

$this->breadcrumbs=array(
	'Requisitoses'=>array('index'),
	$model->numero,
);

$this->menu=array(
	array('label'=>'List Requisitos', 'url'=>array('index')),
	array('label'=>'Create Requisitos', 'url'=>array('create')),
	array('label'=>'Update Requisitos', 'url'=>array('update', 'id'=>$model->numero)),
	array('label'=>'Delete Requisitos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->numero),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Requisitos', 'url'=>array('admin')),
);
?>

<h1>View Requisitos #<?php echo $model->numero; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'numero',
		'estado',
		'nombre',
		'anexo',
	),
)); ?>
