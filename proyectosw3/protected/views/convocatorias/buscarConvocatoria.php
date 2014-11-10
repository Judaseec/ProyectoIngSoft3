<?php
/* @var $this ConvocatoriasController */
/* @var $model Convocatorias */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'convocatorias-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<?php echo $form->errorSummary($model); 
//'class' =>'span11', 
?>

<div class="span12">
	<div class="container">
		<div class="tittle">
			<h3 style="margin-left:20px;">Busqueda Convocatoria</h3>
		</div>
		<!--<form action="ConvocatoriasController/buscar">-->
			<div class="contenido">
				<div style="margin-left:20px; margin-top:10px;" class="span8 search-query">
				<?php echo $form->label($model,'nombre'); ?>
				<?php echo $form->textField($model,'nombre', array('class' => 'span11'));?>
				</div>
				
				<div class="span12">
					<div class="span4">
						<?php echo $form->label($model,'idConvocatoria'); ?>
						<?php echo $form->textField($model,'idConvocatoria'); ?>
					</div>

					<div class="span4">
						<?php echo $form->label($model,'areaTematica'); ?>
						<?php echo $form->dropDownList($model,'areaTematica',CHtml::listData(AreasTematicas::model()->findAll(),"id","nombre")); ?>
					</div>
					<div class="span4">
						<?php echo $form->label($model,'programaNacional'); ?>
						<?php echo $form->dropDownList($model,'programaNacional',CHtml::listData(ProgramaNacional::model()->findAll(),"id","nombre")); ?>
					</div>
				</div>

				<div class="span12">
					<div class="span4">
						<?php echo $form->label($model,'entidad'); ?>
						<?php echo $form->dropDownList($model,'entidad',CHtml::listData(Entidades::model()->findAll(),"id","nombre")); ?>
					</div>

					<div class="span4">
						<?php //echo $form->label($model,'fechaApertura'); ?>
						<?php //echo $form->textField($model,'fechaApertura'); ?>
						<?php echo $form->label($model,'fechaApertura'); ?>
						<?php
						  	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
						   	'model'=>$model,
						   	'attribute'=>'fechaApertura',
						   	'value'=>$model->fechaApertura,
						   	'language' => 'es',
						   	'htmlOptions' => array('readonly'=>"readonly"),
						   	'options'=>array(
						    'autoSize'=>true,
						    'defaultDate'=>$model->fechaApertura,
						    'dateFormat'=>'yy-mm-dd',
						    'buttonImage'=>Yii::app()->baseUrl.'/themes/colciencias/img/calendario.png',
						    'buttonImageOnly'=>true,
						    'buttonText'=>'Fecha',
						    'selectOtherMonths'=>true,
						    'showAnim'=>'slide',
						    'showButtonPanel'=>true,
						    'showOn'=>'button', 
						    'showOtherMonths'=>true, 
						    'changeMonth' => 'true', 
						    'changeYear' => 'true', 
						    'minDate'=>'1900-01-01', 
						    'maxDate'=> '0',
						    	),
						  	)); 
						 ?>
						 <?php echo $form->error($model,'fechaApertura'); ?>
						
					</div>
					<div class="span4">
						
						<?php echo $form->label($model,'fechaCierre'); ?>
						<?php
						  	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
						   	'model'=>$model,
						   	'attribute'=>'fechaCierre',
						   	'value'=>$model->fechaApertura,
						   	'language' => 'es',
						   	'htmlOptions' => array('readonly'=>"readonly"),
						   	'options'=>array(
						    'autoSize'=>true,
						    'defaultDate'=>$model->fechaCierre,
						    'dateFormat'=>'yy-mm-dd',
						    'buttonImage'=>Yii::app()->baseUrl.'/themes/colciencias/img/calendario.png',
						    'buttonImageOnly'=>true,
						    'buttonText'=>'Fecha',
						    'selectOtherMonths'=>true,
						    'showAnim'=>'slide',
						    'showButtonPanel'=>true,
						    'showOn'=>'button', 
						    'showOtherMonths'=>true, 
						    'changeMonth' => 'true', 
						    'changeYear' => 'true', 
						    'minDate'=>'0', 
						    'maxDate'=> '2024-01-01',
						    	),
						  	)); 
						 ?>
						 <?php echo $form->error($model,'fechaApertura'); ?>
					</div>
				</div>

				<div class="span12">
					<?php echo CHtml::submitButton('Buscar', array("class"=>"btn btn-primary btn-large")); ?>				
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
			</div>
		<!--</form>-->
	</div>
</div>

<?php $this->endWidget(); ?>
