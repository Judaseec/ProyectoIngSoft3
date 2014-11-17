<?php
/* @var $this ParticipantesController */
/* @var $model Participantes */

$this->breadcrumbs=array(
	'Participantes'=>array('index'),
	$model->numero,
);

$this->menu=array(
	array('label'=>'List Participantes', 'url'=>array('index')),
	array('label'=>'Create Participantes', 'url'=>array('create')),
	array('label'=>'Update Participantes', 'url'=>array('update', 'id'=>$model->numero)),
	array('label'=>'Delete Participantes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->numero),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Participantes', 'url'=>array('admin')),
);
?>

<h1>View Participantes #<?php echo $model->numero; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'numero',
		'rol',
		'nombreParticipante',
		'documento',
		'convocatoria',
	),
)); ?>
