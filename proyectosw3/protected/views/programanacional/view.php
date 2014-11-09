<?php
/* @var $this ProgramanacionalController */
/* @var $model Programanacional */

$this->breadcrumbs=array(
	'Programanacionals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Programanacional', 'url'=>array('index')),
	array('label'=>'Create Programanacional', 'url'=>array('create')),
	array('label'=>'Update Programanacional', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Programanacional', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Programanacional', 'url'=>array('admin')),
);
?>

<h1>View Programanacional #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
		'objetivo',
		'email',
		'telefono',
	),
)); ?>
