<?php
class rubrosTest extends PHPUnit_Framework_TestCase
{
	 public function testCreate()
	 {
	 	$rubros= new Rubros;
	 	$rubros->id=1;
	 	$rubros->descripcion="Pedro";
	 	$rubros->cantidad=2;
	 	$rubros->valorUnitario=12000;
	 	$rubros->justificacion="pedrin@hotmail.com";
	 	$rubros->valorTotal=120000;
	 	$rubros->entidad="1";
	 	$rubros->contrapartidaEspecie=34560000;
	 	$rubros->contrapartidaDinero=2340000;
	    $rubros->valorFinanciado=120000;
	    $rubros->Total=12000;
	    $rubros->convocatoria=1,

	 	

	 	$this->assertTrue($rubros->save());
	 }

	 public function testBuscar()
	 {
	 	$rubros = new Usuarios;
	 	$aux = $rubros->findByPk(1);
	 	$this->assertNotNull($aux);
	 }
}
?>