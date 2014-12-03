<?php
/* @var $this RubrosController */
/* @var $data Rubros */
?>



<div class="contenido">
	
	<div class="span12">
		<div class="span2">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>

		</div>
		<div class="span2">
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		</div>
		<br />
	</div>

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorUnitario')); ?>:</b>
	<?php echo CHtml::encode($data->valorUnitario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('justificacion')); ?>:</b>
	<?php echo CHtml::encode($data->justificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorTotal')); ?>:</b>
	<?php echo CHtml::encode($data->valorTotal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidad')); ?>:</b>
	<?php echo CHtml::encode($data->entidad); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('contrapartidaEspecie')); ?>:</b>
	<?php echo CHtml::encode($data->contrapartidaEspecie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contrapartidaDinero')); ?>:</b>
	<?php echo CHtml::encode($data->contrapartidaDinero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorFinanciado')); ?>:</b>
	<?php echo CHtml::encode($data->valorFinanciado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Total')); ?>:</b>
	<?php echo CHtml::encode($data->Total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('convocatoria')); ?>:</b>
	<?php echo CHtml::encode($data->convocatoria); ?>
	<br />

	*/ ?>

</div>