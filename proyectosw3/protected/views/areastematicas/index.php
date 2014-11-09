<?php
/* @var $this AreastematicasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Areastematicases',
);

$this->menu=array(
	array('label'=>'Create Areastematicas', 'url'=>array('create')),
	array('label'=>'Manage Areastematicas', 'url'=>array('admin')),
);
?>

<h1>Areastematicases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
