<?php
/* @var $this ConvocatoriasController */
/* @var $data Convocatorias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idConvocatoria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idConvocatoria), array('view', 'id'=>$data->idConvocatoria)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaApertura')); ?>:</b>
	<?php echo CHtml::encode($data->fechaApertura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCierre')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCierre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anexos')); ?>:</b>
	<?php echo CHtml::encode($data->anexos); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('programa')); ?>:</b>
	<?php echo CHtml::encode($data->programa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('areaTematica')); ?>:</b>
	<?php echo CHtml::encode($data->areaTematica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('programaNacional')); ?>:</b>
	<?php echo CHtml::encode($data->programaNacional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('objetivo')); ?>:</b>
	<?php echo CHtml::encode($data->objetivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remitente')); ?>:</b>
	<?php echo CHtml::encode($data->remitente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaPublicacionAdjudicacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaPublicacionAdjudicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaEntregaDocumento')); ?>:</b>
	<?php echo CHtml::encode($data->fechaEntregaDocumento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactoProceso')); ?>:</b>
	<?php echo CHtml::encode($data->contactoProceso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuantia')); ?>:</b>
	<?php echo CHtml::encode($data->cuantia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidad')); ?>:</b>
	<?php echo CHtml::encode($data->entidad); ?>
	<br />

	*/ ?>

</div>