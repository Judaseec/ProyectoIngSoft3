<?php
/* @var $this ConvocatoriasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Convocatorias',
);

$this->menu=array(
	array('label'=>'Crear Convocatorias', 'url'=>array('create')),
	array('label'=>'Administrar Convocatorias', 'url'=>array('admin')),
	array('label'=>'Buscar Convocatoria', 'url'=>array('buscarConvocatoria')),
);
?>

<h1>Convocatoria</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
