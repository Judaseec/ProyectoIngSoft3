<?php
/* @var $this TipodocumentosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipodocumentoses',
);

$this->menu=array(
	array('label'=>'Create Tipodocumentos', 'url'=>array('create')),
	array('label'=>'Manage Tipodocumentos', 'url'=>array('admin')),
);
?>

<h1>Tipodocumentoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
