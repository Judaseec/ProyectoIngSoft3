<?php
/* @var $this ConvocatoriasController */
/* @var $model Convocatorias */

$this->breadcrumbs=array(
	'Convocatoriases'=>array('index'),
	$model->idConvocatoria,
);

$this->menu=array(
	array('label'=>'List Convocatorias', 'url'=>array('index')),
	array('label'=>'Create Convocatorias', 'url'=>array('create')),
	array('label'=>'Update Convocatorias', 'url'=>array('update', 'id'=>$model->idConvocatoria)),
	array('label'=>'Delete Convocatorias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idConvocatoria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Convocatorias', 'url'=>array('admin')),
);
?>

<h1>View Convocatorias #<?php echo $model->idConvocatoria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idConvocatoria',
		'nombre',
		'estado',
		'tipo',
		'fechaApertura',
		'fechaCierre',
		'anexos',
		'programa',
		'areaTematica',
		'programaNacional',
		'objetivo',
		'remitente',
		'fechaPublicacionAdjudicacion',
		'fechaEntregaDocumento',
		'contactoProceso',
		'cuantia',
		'entidad',
	),
)); ?>
