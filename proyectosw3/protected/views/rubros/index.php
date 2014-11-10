<?php
/* @var $this RubrosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rubros',
);

$this->menu=array(
	
	array('label'=>'generales','url'=> array('Generales'))
	
);
?>

<h1>Rubros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
