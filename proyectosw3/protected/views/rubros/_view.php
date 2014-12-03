<?php
/* @var $this RubrosController */
/* @var $data Rubros */
?>



<div class="contenido" style="height: 250px;">
	
	<div class="span12" style="margin-left:20px; margin-top:20px;">
		<div class="span2">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>

		</div>
		<div class="span2">
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		</div>
		<br />
	</div>

	<div class="span12" style="margin-left:20px;">	
		<div class="span2">
		<b>Descripción:</b>
		<?php /* echo CHtml::encode($data->getAttributeLabel('descripcion')); */ ?>
		</div>
		<div class="span2">
		<?php echo CHtml::encode($data->descripcion); ?>
		</div>
		<br />
	</div>
	<div class="span12" style="margin-left:20px;">
		<div class="span2">
		<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
		</div>
		<div class="span2">
		<?php echo CHtml::encode($data->cantidad); ?>
		</div>
		<br />
	</div>
	<div class="span12" style="margin-left:20px;">
		<div class="span2">
		<b><?php echo CHtml::encode($data->getAttributeLabel('valor Unitario')); ?>:</b>
		</div>
		<div class="span2">
		<?php echo CHtml::encode($data->valorUnitario); ?>
		</div>
		<br />
	</div>
	<div class="span12" style="margin-left:20px;">
		<div class="span2">
		<b>Justificación:</b>
		<?php /* echo CHtml::encode($data->getAttributeLabel('justificacion')); */ ?>
		</div>
		<div class="span2">
		<?php echo CHtml::encode($data->justificacion); ?>
		</div>
		<br />
	</div>
	<div class="span12" style="margin-left:20px;">
		<div class="span2">
		<b><?php echo CHtml::encode($data->getAttributeLabel('valor Total')); ?>:</b>
		</div>
		<div class="span2">
		<?php echo CHtml::encode($data->valorTotal); ?>
		</div>
		<br />
	</div>
	<div class="span12" style="margin-left:20px;">
		<div class="span2">
		<b><?php echo CHtml::encode($data->getAttributeLabel('entidad')); ?>:</b>
		</div>
		<div class="span2">
		<?php echo CHtml::encode($data->entidad); ?>
		</div>
		<br />
	</div>
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