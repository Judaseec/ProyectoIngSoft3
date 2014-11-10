<?php
/* @var $this RubrosController */
/* @var $model Rubros */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	//'id'=>'convocatorias-form',
	'id'=>'rubros-form',

	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<?php echo $form->errorSummary($model); 
//'class' =>'span11', 
?>


 
	<div class="span4">
	<div class="container">
		<div class="tittle">
			<h3 style="margin-left:20px;">Busqueda Convocatoria</h3>
		</div>
		<form action="Convocatorias/buscar">
			<div class="contenido">
				<div style="margin-left:20px; margin-top:10px;" class="span8 search-query">
				<?php echo $form->label($model,'Costos operativos'); ?>
                 <?php echo $form->label($model,'Equipos'); ?>
                 <?php echo $form->label($model,'Materiales e insumos'); ?>
                 <?php echo $form->label($model,'Participacion en eventos'); ?>
                 <?php echo $form->label($model,'Personal'); ?>
                 <?php echo $form->label($model,'Personal de apoyo'); ?>
                 <?php echo $form->label($model,'Salidas de campo'); ?>
                 <?php echo $form->label($model,'Servicios tecnologicos'); ?>
                 <?php echo $form->label($model,'Sofware'); ?>

                 </div>
                 </div>




				<div class="span5">
					<?php echo $form->label($model,'Descripcion'); ?>
					<?php echo $form->textField($model,'descripcion'); ?>
				</div>

				<div class="span5">
					<?php echo $form->label($model,'Justificacion'); ?>
					<?php echo $form->textField($model,'justificacion'); ?>
				</div>

				<div class="span3">
					<?php echo $form->label($model,'Cantidad'); ?>
					<?php echo $form->textField($model,'cantidad'); ?>
				</div>

                <div class="span3">
					<?php echo $form->label($model,'Cantidad'); ?>
					<?php echo $form->textField($model,'cantidad'); ?>
				</div>

			<div class="span3">
					<?php echo $form->label($model,'Valor total'); ?>
					<?php echo $form->textField($model,'valorTotal'); ?>
				</div>

				

					
	</div>
</div>

<?php $this->endWidget(); ?>
