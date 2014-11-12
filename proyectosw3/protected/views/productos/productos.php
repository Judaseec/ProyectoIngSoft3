<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */

$this->pageTitle='Productos'.$model->id;
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
	
   
		
			
		        <div class="span4">
			
					<?php echo $form->label($model,'Descripcion'); ?>
					
				

					<?php echo $form->label($model,'Justificacion'); ?>
				
			    </div>
  
					<?php echo $form->label($model,'Cantidad'); ?>
					
				
					<?php echo $form->label($model,'Valor unitario'); ?>
				
					<?php echo $form->label($model,'Valor total'); ?>
				
			  <div class="row-fluid">
	
		 <div class="span9">


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