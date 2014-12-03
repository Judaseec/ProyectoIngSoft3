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

<div class="container">
	<div class="tittle">
		<h3 style="margin-left:20px;">Rubros</h3>
	</div>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php /*$this->renderPartial('_view', array('dataProvider'=>$dataProvider)); */?>