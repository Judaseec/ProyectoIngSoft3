<?php
class UsuarioTest extends PHPUnit_Framework_TestCase
{
	 public function testCreate()
	 {
	 	$usuario= new Usuarios;
	 	$usuario->cedula=1;
	 	$usuario->nombre="Pedro";
	 	$usuario->apellido="Perez";
	 	$usuario->telefono="7437273";
	 	$usuario->email="pedrin@hotmail.com";
	 	$usuario->cargo="estudiante";
	 	$usuario->tipo="1";
	 	$usuario->usuario="pedro";
	 	sha1($usuario->contrasenia="pedro");

	 	$this->assertTrue($usuario->save());
	 }

	 public function testBuscar()
	 {
	 	$usuario = new Usuarios;
	 	$aux = $usuario->findByPk(1094941728);
	 	$this->assertNotNull($aux);
	 }
}
?>