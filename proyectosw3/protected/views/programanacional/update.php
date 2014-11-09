<?php
/* @var $this ProgramanacionalController */
/* @var $model Programanacional */

$this->breadcrumbs=array(
	'Programanacionals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Programanacional', 'url'=>array('index')),
	array('label'=>'Create Programanacional', 'url'=>array('create')),
	array('label'=>'View Programanacional', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Programanacional', 'url'=>array('admin')),
);
?>

<h1>Update Programanacional <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>