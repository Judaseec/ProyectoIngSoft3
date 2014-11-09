<?php
/* @var $this RequisitosController */
/* @var $data Requisitos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->numero), array('view', 'id'=>$data->numero)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anexo')); ?>:</b>
	<?php echo CHtml::encode($data->anexo); ?>
	<br />


</div>