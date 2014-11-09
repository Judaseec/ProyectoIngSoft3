<?php
/* @var $this ConvocatoriasController */
/* @var $model Convocatorias */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idConvocatoria'); ?>
		<?php echo $form->textField($model,'idConvocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaApertura'); ?>
		<?php echo $form->textField($model,'fechaApertura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaCierre'); ?>
		<?php echo $form->textField($model,'fechaCierre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anexos'); ?>
		<?php echo $form->textArea($model,'anexos',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'programa'); ?>
		<?php echo $form->textField($model,'programa',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'areaTematica'); ?>
		<?php echo $form->textField($model,'areaTematica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'programaNacional'); ?>
		<?php echo $form->textField($model,'programaNacional'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'objetivo'); ?>
		<?php echo $form->textField($model,'objetivo',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remitente'); ?>
		<?php echo $form->textField($model,'remitente',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaPublicacionAdjudicacion'); ?>
		<?php echo $form->textField($model,'fechaPublicacionAdjudicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaEntregaDocumento'); ?>
		<?php echo $form->textField($model,'fechaEntregaDocumento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contactoProceso'); ?>
		<?php echo $form->textField($model,'contactoProceso',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cuantia'); ?>
		<?php echo $form->textField($model,'cuantia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->