<?php
/* @var $this FormulariosController */
/* @var $model Formularios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'formularios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idFormulario'); ?>
		<?php echo $form->textField($model,'idFormulario'); ?>
		<?php echo $form->error($model,'idFormulario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreInstitucionPregrado'); ?>
		<?php echo $form->textField($model,'nombreInstitucionPregrado',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nombreInstitucionPregrado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pregrado'); ?>
		<?php echo $form->textField($model,'pregrado',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'pregrado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombrePrograma'); ?>
		<?php echo $form->textField($model,'nombrePrograma',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nombrePrograma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'promedioNotas'); ?>
		<?php echo $form->textField($model,'promedioNotas'); ?>
		<?php echo $form->error($model,'promedioNotas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tituloObtenido'); ?>
		<?php echo $form->textField($model,'tituloObtenido',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'tituloObtenido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estado'); ?>
		<?php echo $form->textField($model,'Estado',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'Estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'convocatoria'); ?>
		<?php echo $form->textField($model,'convocatoria'); ?>
		<?php echo $form->error($model,'convocatoria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->