<?php
/* @var $this RubrosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rubroses',
);

$this->menu=array(
	array('label'=>'Rubros', 'url'=>array('Rubros')),
	
);
?>

<h1>Rubroses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
