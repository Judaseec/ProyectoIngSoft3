<?php
/* @var $this AreastematicasController */
/* @var $model Areastematicas */

$this->breadcrumbs=array(
	'Areastematicases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Areastematicas', 'url'=>array('index')),
	array('label'=>'Create Areastematicas', 'url'=>array('create')),
	array('label'=>'View Areastematicas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Areastematicas', 'url'=>array('admin')),
);
?>

<h1>Update Areastematicas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>