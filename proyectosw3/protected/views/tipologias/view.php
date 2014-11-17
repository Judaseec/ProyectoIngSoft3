<?php
/* @var $this TipologiasController */
/* @var $model Tipologias */

$this->breadcrumbs=array(
	'Tipologiases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tipologias', 'url'=>array('index')),
	array('label'=>'Create Tipologias', 'url'=>array('create')),
	array('label'=>'Update Tipologias', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tipologias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipologias', 'url'=>array('admin')),
);
?>

<h1>View Tipologias #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
	),
)); ?>
