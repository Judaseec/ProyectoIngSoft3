<?php
/* @var $this TipologiasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipologiases',
);

$this->menu=array(
	array('label'=>'Create Tipologias', 'url'=>array('create')),
	array('label'=>'Manage Tipologias', 'url'=>array('admin')),
);
?>

<h1>Tipologiases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
