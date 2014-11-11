<?php
/* @var $this ConvocatoriasController */
/* @var $model Convocatorias */

$this->breadcrumbs=array(
	'Convocatoriases'=>array('index'),
	$model->idConvocatoria,
);

$this->menu=array(
	array('label'=>'List Convocatorias', 'url'=>array('index')),
	array('label'=>'Create Convocatorias', 'url'=>array('create')),
	array('label'=>'Update Convocatorias', 'url'=>array('update', 'id'=>$model->idConvocatoria)),
	array('label'=>'Delete Convocatorias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idConvocatoria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Convocatorias', 'url'=>array('admin')),
);
?>

<!--<h1 class="colorletra">Detalle de la Convocatoria #<?php echo $model->idConvocatoria; ?></h1>-->

<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idConvocatoria',
		'nombre',
		'estado',
		'tipo',
		'fechaApertura',
		'fechaCierre',
		'anexos',
		'programa',
		'areaTematica',
		'programaNacional',
		'objetivo',
		'remitente',
		'fechaPublicacionAdjudicacion',
		'fechaEntregaDocumento',
		'contactoProceso',
		'cuantia',
		'entidad',
	),
)); */?>

<br>

<div class="container">
	<div class="tittle">
		<h3 style="margin-left:20px;">Detalle de la Convocatoria</h3>
	</div>
	<div class="contenido">
		<div class="span12">
			<h4 class="formatoh4"><?php echo CHtml::value(Convocatorias::model()->findByPk($model->idConvocatoria), "nombre") ?></h4>
		</div>
		<div class="span12">
			<h5 class="formatoh5">Convocatoria No <?php echo CHtml::value(Convocatorias::model()->findByPk($model->idConvocatoria), "idConvocatoria") ?></h5>
			<hr class="tamaniohr">
		</div>
		
		<div class="span12">
			<h4 class="colorletra">Objetivo</h4>
		</div>
		<div class="span12">
			<?php echo CHtml::value(Convocatorias::model()->findByPk($model->idConvocatoria), "objetivo") ?>
			<hr class="tamaniohr">
		</div>

		<div class="span12">
			<h4 class="colorletra">Dirigido a</h4>
		</div>
		<div class="span12">
			<?php echo CHtml::value(Convocatorias::model()->findByPk($model->idConvocatoria), "remitente") ?>

			<div class="derecha span12">
				<div class="derecha">
					<?php echo CHtml::Button('Postular', array("class"=>"btn btn-primary btn-large")); ?>
				</div>
			</div>
			<hr class="tamaniohr">
		</div>

		
	</div>
	
	<div class="contenido">
		<table class="tabla">
		  <thead class="tabla">
		  	<tr class="centrado">
		  		<th colspan="6">Datos convocatoria</th>
		  	</tr>
		    <tr>
		      <th width="100" class="tabla">Estado</th>
		      <th class="tabla">Tipo</th>
		      <th width="150" class="tabla">Apertura</th>
		      <th width="150" class="tabla">Cierre</th>
		      <th width="200" class="tabla">Publicacion de resultados de evaluacion</th>
		      <th width="150" class="tabla">Adjudicacion</th>
		    </tr>
		    
		  </thead>
		  <tbody class="tabla">
		    <tr>
		      <td class="tabla"><?php echo CHtml::value(Convocatorias::model()->findByPk($model->idConvocatoria), "estado") ?></td>
		      <td class="tabla"><?php echo CHtml::value(Convocatorias::model()->findByPk($model->idConvocatoria), "tipo") ?></td>
		      <td class="tabla"><?php echo CHtml::value(Convocatorias::model()->findByPk($model->idConvocatoria), "fechaApertura") ?></td>
		      <td class="tabla"><?php echo CHtml::value(Convocatorias::model()->findByPk($model->idConvocatoria), "fechaCierre") ?></td>
		      <td class="tabla"><?php echo CHtml::value(Convocatorias::model()->findByPk($model->idConvocatoria), "fechaEntregaDocumento") ?></td>
		      <td class="tabla"><?php echo CHtml::value(Convocatorias::model()->findByPk($model->idConvocatoria), "fechaPublicacionAdjudicacion") ?></td>
		    </tr>
		    
		  </tbody>
		</table>
	</div>
</div>

<a href="http://localhost:8090/ProyectoIngSoft3/proyectosw3/convocatorias/buscarConvocatoria"><?php echo CHtml::Button('Buscar', array("class"=>"btn btn-primary btn-large")); ?></a>