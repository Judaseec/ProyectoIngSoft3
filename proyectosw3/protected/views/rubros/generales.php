<?php
/* @var $this RubrosController */
/* @var $model Rubros */
/* @var $form CActiveForm */

$this->pageTitle='Rubros '.$model->id;
$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	$model->id,
);?>

<div class="container">
	<div class="tittle">
			<h3 style="margin-left:20px;">Rubros</h3>
		</div>

<div class="contenido">
				<div style="margin-left:20px; margin-top:10px;" class="span12 search-query">
	<?php $form=$this->beginWidget('CActiveForm', array('id'=>'rubros-form', 'enableAjaxValidation'=>false,)); ?>
	<div class="row-fluid">
    <div class="span3">
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


	<div class="row-fluid">
		
			<div class="row-fluid">
		        <div class="span4">
			
					<?php echo $form->label($model,'Descripcion'); ?>
					<?php echo $form->textField($model,'descripcion'); ?>
				

					<?php echo $form->label($model,'Justificacion'); ?>
					<?php echo $form->textField($model,'justificacion'); ?>
			 </div>

					<?php echo $form->label($model,'Cantidad'); ?>
					<?php echo $form->textField($model,'cantidad'); ?>
				
					<?php echo $form->label($model,'Valor unitario'); ?>
					<?php echo $form->textField($model,'valorUnitario'); ?>
				
                
					<?php echo $form->label($model,'Valor total'); ?>
					<?php echo $form->textField($model,'valorTotal'); ?>
		
				
				 
				  </div>



				  </div>
				   <br>
				
 </div>
       
</div>
<br>
				<br>	
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
</div>

<?php $this->endWidget(); ?>
