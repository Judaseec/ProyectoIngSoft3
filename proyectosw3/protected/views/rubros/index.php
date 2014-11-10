<?php
/* @var $this RubrosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rubros',
);

$this->menu=array(
	
	array('label'=>'Create Rubros', 'url'=>array('create')),
	array('label'=>'Manage Rubros', 'url'=>array('admin')),
	array('label'=>'generales','url'=> array('Generales'))
	
);
?>

<h1>Rubros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
