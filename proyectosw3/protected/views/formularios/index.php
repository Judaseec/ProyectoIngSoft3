<?php
/* @var $this FormulariosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Formularioses',
);

$this->menu=array(
	array('label'=>'Create Formularios', 'url'=>array('create')),
	array('label'=>'Manage Formularios', 'url'=>array('admin')),
);
?>

<h1>Formularioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
