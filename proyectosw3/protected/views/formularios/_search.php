<?php
/* @var $this FormulariosController */
/* @var $model Formularios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idFormulario'); ?>
		<?php echo $form->textField($model,'idFormulario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreInstitucionPregrado'); ?>
		<?php echo $form->textField($model,'nombreInstitucionPregrado',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pregrado'); ?>
		<?php echo $form->textField($model,'pregrado',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombrePrograma'); ?>
		<?php echo $form->textField($model,'nombrePrograma',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'promedioNotas'); ?>
		<?php echo $form->textField($model,'promedioNotas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tituloObtenido'); ?>
		<?php echo $form->textField($model,'tituloObtenido',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Estado'); ?>
		<?php echo $form->textField($model,'Estado',array('size'=>60,'maxlength'=>60)); ?>
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