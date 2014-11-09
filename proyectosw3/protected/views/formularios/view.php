<?php
/* @var $this FormulariosController */
/* @var $model Formularios */

$this->breadcrumbs=array(
	'Formularioses'=>array('index'),
	$model->idFormulario,
);

$this->menu=array(
	array('label'=>'List Formularios', 'url'=>array('index')),
	array('label'=>'Create Formularios', 'url'=>array('create')),
	array('label'=>'Update Formularios', 'url'=>array('update', 'id'=>$model->idFormulario)),
	array('label'=>'Delete Formularios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFormulario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Formularios', 'url'=>array('admin')),
);
?>

<h1>View Formularios #<?php echo $model->idFormulario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idFormulario',
		'nombreInstitucionPregrado',
		'pregrado',
		'nombrePrograma',
		'promedioNotas',
		'tituloObtenido',
		'Estado',
		'convocatoria',
	),
)); ?>
