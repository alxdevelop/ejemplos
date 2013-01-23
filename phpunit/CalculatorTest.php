<?php

  include_once 'Calculator.php';

  class CalculatorTest extends PHPUnit_Framework_TestCase{

    public $test;

    public function setUp(){
      $this->test = new Calculator;
    }

    public function provider(){
      
      return array(
        array(20,15,5),
        array(45,20,25)
      );
      

    }

    public function dataSuma(){
      
      return array(
        array(75,array(10,15,20,30)),
        array(113,array(15,10,25,47,16)),
        array(19,array(10,-25,30,4))
      );

    }
    /** 
     * @dataProvider dataSuma
     */
    public function testSuma($result, $arreglo){

      $this->assertEquals($result, $this->test->suma($arreglo));
    }



    /**
     * @dataProvider provider
     */
    public function testSumaSimple($result, $val1, $val2){
      
      $this->assertEquals($result, $this->test->sumaSimple($val1,$val2));
    
    }

    /*
     * assertArrayHasKey Verifica si existe un key con el nombre
     * indicado.
     */
    public function testFailure(){
      
      $this->assertArrayHasKey('hola',
        array(
          'hola'=> 'texto',
          'otro' => 'mas Texto')
        );

    }

    /**
     * assertClassHasAttribute() Verifica si existe un atributo en la clase
     * assertClassHasAttribute(string $attributeName, string $className)
     */
    public function testClassAttribute(){
      
      $this->assertClassHasAttribute('operacion', 'Calculator');

    }

    /**
     * assertClassHasStaticAttribute verifica si existe un atributo 'static' dentro de la clase
     *
     */
    public function testClassAttributeStatic(){
      
      $this->assertClassHasStaticAttribute('saldo', 'Calculator');

    }

    /**
     * assertContains verifica si existe el valor en un array
     * assertContains(value, array)
     */
    public function testContains(){

      $this->assertContains(10, array(5,10,24,65));
      $this->assertContains('hola', array('como', 'estas','tu','hola','quien'));

    }
    /**
     * assertNotContains verifica si no existe el valor en un array
     *
     */
    public function testNoContains(){

      $this->assertNotContains(12, array(5,10,24,65));

    }

    /**
     * assertContainsOnly verifica que solo exista el tipo de dato definido
     *
     */
    public function testContainsOnly(){

      $this->assertContainsOnly('string', array('1','2','3'));
      $this->assertContainsOnly('int',array(1,2,3,4));
    }

    /**
     * assertNotContainsOnly verifica que no solo exista el tipo de dato definido
     */
    public function testNotContainsOnly(){
      
      $this->assertNotContainsOnly('string', array(1,'2','3',4));

    }

    /**
     * assertCount verifica el numero de registros del array del numero definido
     */
    public function testCount(){

      $this->assertCount(3,array(1,2,3));

    }

    /**
     * assertEmpty verifica si el array esta vacio
     */
    public function testEmpty(){

      $this->assertEmpty(array());

    }

    /**
     * assertEquals verifica que sea igual el resultado con el valor definido
     */
    public function testEquals(){

      $this->assertEquals(10, 5+5);
      
      //ejemplo con DOMDocument
      $expected = new DOMDocument;
      $expected->loadXML('<div><label>Hola</label></div>');

      $actual = new DOMDocument;
      $actual->loadXML('<div><label>Hola</label></div>');

      $this->assertEquals($expected,$actual);
    }

    
    /**
     * assertNotEquals verifica que no sea igual el resulado con el valor definido
     */
    public function testNotEquals(){

      $this->assertNotEquals(20, (10+15));

    }

    /**
     *  assertFileEquals verifica que sean iguales los archivos
     */
    public function testFileEquals(){

      $this->assertFileEquals('/var/www/phpunit/Calculator.php','/var/www/phpunit/Calculator.php');

    }

    /**
     *  assertFileExists verifica si existe el archivo
     */
    public function testFileExists(){

      $this->assertFileExists('/var/www/phpunit/Calculator.php');

    }

    /**
     * assertFalse verifica que sea falso el resultado
     */
    public function testFalse(){

     $this->assertFalse(FALSE, $message = 'es verdadero :(');

    }
  }

?>
