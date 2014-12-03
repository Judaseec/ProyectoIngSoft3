<?php
/* @var $this ConvocatoriasController */
/* @var $model Convocatorias */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'convocatorias-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los datos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'idConvocatoria'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'idConvocatoria'); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'idConvocatoria'); ?>
	
	</div>
		</div>


	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'nombre'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>60)); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'nombre'); ?>
		</div>

	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'estado'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'estado',array('size'=>60,'maxlength'=>60)); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'estado'); ?>
		</div>
	</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'tipo'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'tipo',array('size'=>60,'maxlength'=>60)); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'tipo'); ?>
		</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'fechaApertura'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'fechaApertura'); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'fechaApertura'); ?>
		</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'fechaCierre'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'fechaCierre'); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'fechaCierre'); ?>
		</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'anexos'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textArea($model,'anexos',array('rows'=>6, 'cols'=>50)); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'anexos'); ?>
		</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'programa'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'programa',array('size'=>60,'maxlength'=>60)); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'programa'); ?>
		</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'areaTematica'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'areaTematica'); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'areaTematica'); ?>
	</div>
	</div>


	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'programaNacional'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'programaNacional'); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'programaNacional'); ?>
	</div>
</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'objetivo'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'objetivo',array('size'=>60,'maxlength'=>60)); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'objetivo'); ?>
		</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'remitente'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'remitente',array('size'=>60,'maxlength'=>500)); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'remitente'); ?>
	</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'fechaPublicacionAdjudicacion'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'fechaPublicacionAdjudicacion'); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'fechaPublicacionAdjudicacion'); ?>
	</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'fechaEntregaDocumento'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'fechaEntregaDocumento'); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'fechaEntregaDocumento'); ?>
	</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'contactoProceso'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'contactoProceso',array('size'=>60,'maxlength'=>100)); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'contactoProceso'); ?>
	</div>
	</div>

	<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'cuantia'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'cuantia'); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'cuantia'); ?>
	</div>
	</div>

<div class="span12">
		<div class="span4">
		<?php echo $form->labelEx($model,'entidad'); ?>
		</div>
		<div class="span4">
		<?php echo $form->textField($model,'entidad'); ?>
		</div>
		<div class="span4">
		<?php echo $form->error($model,'entidad'); ?>
	</div>
	</div>


	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save',array("class"=>"btn btn-primary btn-large")); ?>
	</div

<?php $this->endWidget(); ?>

</div><!-- form -->