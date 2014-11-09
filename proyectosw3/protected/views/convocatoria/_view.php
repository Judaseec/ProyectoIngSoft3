<?php
/* @var $this ConvocatoriaController */
/* @var $data Convocatoria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idConvocatoria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idConvocatoria), array('view', 'id'=>$data->idConvocatoria)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('año')); ?>:</b>
	<?php echo CHtml::encode($data->año); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('anexos')); ?>:</b>
	<?php echo CHtml::encode($data->anexos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receptor')); ?>:</b>
	<?php echo CHtml::encode($data->receptor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('programa')); ?>:</b>
	<?php echo CHtml::encode($data->programa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidad')); ?>:</b>
	<?php echo CHtml::encode($data->entidad); ?>
	<br />

	*/ ?>

</div>