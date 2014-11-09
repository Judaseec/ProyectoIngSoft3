<?php
/* @var $this ConvocatoriasController */
/* @var $model Convocatorias */

$this->breadcrumbs=array(
	'Convocatoriases'=>array('index'),
	$model->idConvocatoria=>array('view','id'=>$model->idConvocatoria),
	'Update',
);

$this->menu=array(
	array('label'=>'List Convocatorias', 'url'=>array('index')),
	array('label'=>'Create Convocatorias', 'url'=>array('create')),
	array('label'=>'View Convocatorias', 'url'=>array('view', 'id'=>$model->idConvocatoria)),
	array('label'=>'Manage Convocatorias', 'url'=>array('admin')),
);
?>

<h1>Update Convocatorias <?php echo $model->idConvocatoria; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>