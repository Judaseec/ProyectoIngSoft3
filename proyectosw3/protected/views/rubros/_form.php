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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorUnitario'); ?>
		<?php echo $form->textField($model,'valorUnitario'); ?>
		<?php echo $form->error($model,'valorUnitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'justificacion'); ?>
		<?php echo $form->textField($model,'justificacion',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'justificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorTotal'); ?>
		<?php echo $form->textField($model,'valorTotal'); ?>
		<?php echo $form->error($model,'valorTotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'entidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrapartidaEspecie'); ?>
		<?php echo $form->textField($model,'contrapartidaEspecie'); ?>
		<?php echo $form->error($model,'contrapartidaEspecie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrapartidaDinero'); ?>
		<?php echo $form->textField($model,'contrapartidaDinero'); ?>
		<?php echo $form->error($model,'contrapartidaDinero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorFinanciado'); ?>
		<?php echo $form->textField($model,'valorFinanciado'); ?>
		<?php echo $form->error($model,'valorFinanciado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Total'); ?>
		<?php echo $form->textField($model,'Total'); ?>
		<?php echo $form->error($model,'Total'); ?>
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