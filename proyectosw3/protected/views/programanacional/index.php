<?php
/* @var $this ProgramanacionalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Programanacionals',
);

$this->menu=array(
	array('label'=>'Create Programanacional', 'url'=>array('create')),
	array('label'=>'Manage Programanacional', 'url'=>array('admin')),
);
?>

<h1>Programanacionals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
