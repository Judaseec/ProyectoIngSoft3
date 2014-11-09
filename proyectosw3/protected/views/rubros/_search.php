<?php
/* @var $this RubrosController */
/* @var $model Rubros */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorUnitario'); ?>
		<?php echo $form->textField($model,'valorUnitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'justificacion'); ?>
		<?php echo $form->textField($model,'justificacion',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorTotal'); ?>
		<?php echo $form->textField($model,'valorTotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contrapartidaEspecie'); ?>
		<?php echo $form->textField($model,'contrapartidaEspecie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contrapartidaDinero'); ?>
		<?php echo $form->textField($model,'contrapartidaDinero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorFinanciado'); ?>
		<?php echo $form->textField($model,'valorFinanciado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Total'); ?>
		<?php echo $form->textField($model,'Total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'convocatoria'); ?>
		<?php echo $form->textField($model,'convocatoria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->