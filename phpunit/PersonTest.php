<?php

  require_once 'Person.php';

  class PersonTest extends PHPUnit_Framework_TestCase{

    public $test;

    public function setUp(){
      $this->test = new Person('Ax');
    } 

    public function testName(){
      $name = $this->test->getName();
      $this->assertTrue($name == 'Alex');
    }
  }

?>
