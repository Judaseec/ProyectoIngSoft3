<?php
/* @var $this AreastematicasController */
/* @var $model Areastematicas */

$this->breadcrumbs=array(
	'Areastematicases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Areastematicas', 'url'=>array('index')),
	array('label'=>'Create Areastematicas', 'url'=>array('create')),
	array('label'=>'Update Areastematicas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Areastematicas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Areastematicas', 'url'=>array('admin')),
);
?>

<h1>View Areastematicas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'objetivo',
		'descripcion',
	),
)); ?>
