<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'convocatoria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idConvocatoria'); ?>
		<?php echo $form->textField($model,'idConvocatoria'); ?>
		<?php echo $form->error($model,'idConvocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'año'); ?>
		<?php echo $form->textField($model,'año'); ?>
		<?php echo $form->error($model,'año'); ?>
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
		<?php echo $form->labelEx($model,'receptor'); ?>
		<?php echo $form->textArea($model,'receptor',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'receptor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'programa'); ?>
		<?php echo $form->textField($model,'programa',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'programa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'entidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->