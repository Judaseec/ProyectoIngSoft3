<?php
/* @var $this RubrosController */
/* @var $model Rubros */

$this->breadcrumbs=array(
	'Rubroses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rubros', 'url'=>array('index')),
	array('label'=>'Create Rubros', 'url'=>array('create')),
	array('label'=>'View Rubros', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Rubros', 'url'=>array('admin')),
);
?>

<h1>Update Rubros <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>