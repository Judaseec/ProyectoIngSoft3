<?php
/* @var $this RequisitosController */
/* @var $model Requisitos */

$this->breadcrumbs=array(
	'Requisitoses'=>array('index'),
	$model->numero=>array('view','id'=>$model->numero),
	'Update',
);

$this->menu=array(
	array('label'=>'List Requisitos', 'url'=>array('index')),
	array('label'=>'Create Requisitos', 'url'=>array('create')),
	array('label'=>'View Requisitos', 'url'=>array('view', 'id'=>$model->numero)),
	array('label'=>'Manage Requisitos', 'url'=>array('admin')),
);
?>

<h1>Update Requisitos <?php echo $model->numero; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>