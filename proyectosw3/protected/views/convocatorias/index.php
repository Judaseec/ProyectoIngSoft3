<?php
/* @var $this ConvocatoriasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Convocatoriases',
);

$this->menu=array(
	array('label'=>'Create Convocatorias', 'url'=>array('create')),
	array('label'=>'Manage Convocatorias', 'url'=>array('admin')),
	array('label'=>'Busqueda', 'url'=>array('buscarConvocatoria')),
);
?>

<h1>Convocatoriases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
