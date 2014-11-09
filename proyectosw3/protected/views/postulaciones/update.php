<?php
/* @var $this PostulacionesController */
/* @var $model Postulaciones */

$this->breadcrumbs=array(
	'Postulaciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Postulaciones', 'url'=>array('index')),
	array('label'=>'Create Postulaciones', 'url'=>array('create')),
	array('label'=>'View Postulaciones', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Postulaciones', 'url'=>array('admin')),
);
?>

<h1>Update Postulaciones <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>