<?php
class productosTest extends PHPUnit_Framework_TestCase
{
	 public function testCreate()
	 {
	 	$productos= new productos;
	 	$productos->id=1;
	 	$productos->nombre="Pedro";
	 	$productos->descripcio="2";
	 	$productos->tipologia="matematicas";
	 	$productos->cantidad=120000;
	 	$productos->beneficiario="1";
	 	$productos->contrapartidaEspecie=34560000;
	 	$productos->contrapartidaDinero=2340000;
	    $productos->valorFinanciado=120000;
	    $productos->Total=12000;
	    $productos->convocatoria=1,

	 	

	 	$this->assertTrue($productos->save());
	 }

	 public function testBuscar()
	 {
	 	$rubros = new Productos;
	 	$aux = $rubros->findByPk(1);
	 	$this->assertNotNull($aux);
	 }
}
?>