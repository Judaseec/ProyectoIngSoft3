<?php
/* @var $this FormulariosController */
/* @var $data Formularios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFormulario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idFormulario), array('view', 'id'=>$data->idFormulario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreInstitucionPregrado')); ?>:</b>
	<?php echo CHtml::encode($data->nombreInstitucionPregrado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregrado')); ?>:</b>
	<?php echo CHtml::encode($data->pregrado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombrePrograma')); ?>:</b>
	<?php echo CHtml::encode($data->nombrePrograma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('promedioNotas')); ?>:</b>
	<?php echo CHtml::encode($data->promedioNotas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tituloObtenido')); ?>:</b>
	<?php echo CHtml::encode($data->tituloObtenido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	<?php echo CHtml::encode($data->Estado); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('convocatoria')); ?>:</b>
	<?php echo CHtml::encode($data->convocatoria); ?>
	<br />

	*/ ?>

</div>