<?php
/* @var $this FormulariosController */
/* @var $model Formularios */

$this->breadcrumbs=array(
	'Formularioses'=>array('index'),
	$model->idFormulario=>array('view','id'=>$model->idFormulario),
	'Update',
);

$this->menu=array(
	array('label'=>'List Formularios', 'url'=>array('index')),
	array('label'=>'Create Formularios', 'url'=>array('create')),
	array('label'=>'View Formularios', 'url'=>array('view', 'id'=>$model->idFormulario)),
	array('label'=>'Manage Formularios', 'url'=>array('admin')),
);
?>

<h1>Update Formularios <?php echo $model->idFormulario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>