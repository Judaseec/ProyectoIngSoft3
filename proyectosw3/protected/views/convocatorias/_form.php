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

	<div class="row">
		<?php echo $form->labelEx($model,'idConvocatoria'); ?>
		<?php echo $form->textField($model,'idConvocatoria'); ?>
		<?php echo $form->error($model,'idConvocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaApertura'); ?>
		<?php echo $form->textField($model,'fechaApertura'); ?>
		<?php echo $form->error($model,'fechaApertura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaCierre'); ?>
		<?php echo $form->textField($model,'fechaCierre'); ?>
		<?php echo $form->error($model,'fechaCierre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anexos'); ?>
		<?php echo $form->textArea($model,'anexos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'anexos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'programa'); ?>
		<?php echo $form->textField($model,'programa',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'programa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'areaTematica'); ?>
		<?php echo $form->textField($model,'areaTematica'); ?>
		<?php echo $form->error($model,'areaTematica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'programaNacional'); ?>
		<?php echo $form->textField($model,'programaNacional'); ?>
		<?php echo $form->error($model,'programaNacional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'objetivo'); ?>
		<?php echo $form->textField($model,'objetivo',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'objetivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remitente'); ?>
		<?php echo $form->textField($model,'remitente',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'remitente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaPublicacionAdjudicacion'); ?>
		<?php echo $form->textField($model,'fechaPublicacionAdjudicacion'); ?>
		<?php echo $form->error($model,'fechaPublicacionAdjudicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaEntregaDocumento'); ?>
		<?php echo $form->textField($model,'fechaEntregaDocumento'); ?>
		<?php echo $form->error($model,'fechaEntregaDocumento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contactoProceso'); ?>
		<?php echo $form->textField($model,'contactoProceso',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'contactoProceso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cuantia'); ?>
		<?php echo $form->textField($model,'cuantia'); ?>
		<?php echo $form->error($model,'cuantia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad'); ?>
		<?php echo $form->error($model,'entidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->