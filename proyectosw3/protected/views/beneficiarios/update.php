<?php
/* @var $this BeneficiariosController */
/* @var $model Beneficiarios */

$this->breadcrumbs=array(
	'Beneficiarioses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Beneficiarios', 'url'=>array('index')),
	array('label'=>'Create Beneficiarios', 'url'=>array('create')),
	array('label'=>'View Beneficiarios', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Beneficiarios', 'url'=>array('admin')),
);
?>

<h1>Update Beneficiarios <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>