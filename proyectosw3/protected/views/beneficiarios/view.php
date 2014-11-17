<?php
/* @var $this BeneficiariosController */
/* @var $model Beneficiarios */

$this->breadcrumbs=array(
	'Beneficiarioses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Beneficiarios', 'url'=>array('index')),
	array('label'=>'Create Beneficiarios', 'url'=>array('create')),
	array('label'=>'Update Beneficiarios', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Beneficiarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Beneficiarios', 'url'=>array('admin')),
);
?>

<h1>View Beneficiarios #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'email',
		'telefono',
	),
)); ?>
