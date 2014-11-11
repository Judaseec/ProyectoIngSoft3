<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */

$this->pageTitle='Productos'.$model->idProductos;
$this->breadcrumbs=array(
	'productos'=>array('index'),
	$model->id,
);?>

<div class="container">
	<div class="tittle">
			<h3 style="margin-left:20px;">Productos</h3>
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
				
					<?php echo CHtml::Button('+', array("class"=>"")); ?>

        
					
				
	
			  <div class="row-fluid">
	
		 <div class="span9">

<table class="table table-bordered table-hover" >

	<tr>	
		<tr class="centrado">
		  		<th colspan="3">Gatos Operativos</th>
		  	</tr>
	<th>Entidad</td>
	<th>Cont Especie</th>
	<th>Cont Dinero </th>
	<th>Valor Financiado</th>
	<th>Total</th>
	</tr>	

<tr>	
	<td>Univeridad del Quindio</td>
	<td>0</td>
	<td>1200000</td>
	<td>1400000</td>
	<td>2600000</td>
	
	</tr>	


	<tr>	
	<td>Univeridad la Gran Colombia</td>
	<td>0</td>
	<td>800000</td>
	<td>200000</td>
	<td>1000000</td>
	
	</tr>

</table>

</div>
</div>  


				  </div>    
				</div>
			
 	</div>
				  </div>
				  
				
 </div>
       
</div>


				
</div>

<?php $this->endWidget(); ?>