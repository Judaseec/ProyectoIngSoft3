<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	
	<div class="span12">
		<div class="span4">
			<?php echo $form->errorSummary($model); ?>
	<div class="">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'tipologia'); ?>
		<?php echo $form->textField($model,'tipologia'); ?>
		<?php echo $form->error($model,'tipologia'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'beneficiario'); ?>
		<?php echo $form->textField($model,'beneficiario'); ?>
		<?php echo $form->error($model,'beneficiario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'producto'); ?>
		<?php echo $form->textField($model,'producto'); ?>
		<?php echo $form->error($model,'producto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->