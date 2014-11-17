<?php
/* @var $this TipologiasController */
/* @var $model Tipologias */

$this->breadcrumbs=array(
	'Tipologiases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipologias', 'url'=>array('index')),
	array('label'=>'Create Tipologias', 'url'=>array('create')),
	array('label'=>'View Tipologias', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tipologias', 'url'=>array('admin')),
);
?>

<h1>Update Tipologias <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>