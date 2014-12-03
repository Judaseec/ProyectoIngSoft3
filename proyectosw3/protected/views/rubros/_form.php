<?php
/* @var $this RubrosController */
/* @var $model Rubros */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rubros-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="span12">
		<div class="span4">
			<?php echo $form->labelEx($model,'id'); ?>
		</div>
		<div class="span4">
			<?php echo $form->textField($model,'id'); ?>
		</div>	
		<div class="span4">
			<?php echo $form->error($model,'id'); ?>
		</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'descripcion'); ?>
		</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'cantidad'); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'cantidad'); ?>
		</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'valorUnitario'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'valorUnitario'); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'valorUnitario'); ?>
		</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'justificacion'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'justificacion',array('size'=>60,'maxlength'=>60)); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'justificacion'); ?>
		</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'valorTotal'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'valorTotal'); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'valorTotal'); ?>
		</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'entidad'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'entidad',array('size'=>60,'maxlength'=>60)); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'entidad'); ?>
		</div>
	</div>

	<div class="span12" >
		<div class="span4">
		<?php echo $form->labelEx($model,'contrapartidaEspecie'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'contrapartidaEspecie'); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'contrapartidaEspecie'); ?>
		</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'contrapartidaDinero'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'contrapartidaDinero'); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'contrapartidaDinero'); ?>
		</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'valorFinanciado'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'valorFinanciado'); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'valorFinanciado'); ?>
		</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'Total'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'Total'); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'Total'); ?>
		</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'convocatoria'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'convocatoria'); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'convocatoria'); ?>
		</div>
	</div>

<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save', array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->