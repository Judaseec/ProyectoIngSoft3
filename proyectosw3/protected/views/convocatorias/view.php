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

		<table>
		  <thead>
		    <tr>
		      <th width="200">Table Header</th>
		      <th>Table Header</th>
		      <th width="150">Table Header</th>
		      <th width="150">Table Header</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Content Goes Here</td>
		      <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
		      <td>Content Goes Here</td>
		      <td>Content Goes Here</td>
		    </tr>
		    <tr>
		      <td>Content Goes Here</td>
		      <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
		      <td>Content Goes Here</td>
		      <td>Content Goes Here</td>
		    </tr>
		    <tr>
		      <td>Content Goes Here</td>
		      <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
		      <td>Content Goes Here</td>
		      <td>Content Goes Here</td>
		    </tr>
		  </tbody>
		</table>
	</div>
	
	
</div>

<a href="http://localhost:8090/ProyectoIngSoft3/proyectosw3/convocatorias/buscarConvocatoria"><?php echo CHtml::Button('Buscar', array("class"=>"btn btn-primary btn-large")); ?></a>