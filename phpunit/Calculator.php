<?php

class Calculator{

  public $operacion;
  static $saldo;

  public function suma($data){

    //definimos variable del resultado
    $total = 0;

    foreach($data as $Data){
      
      $total = $total + $Data;

    }

    return $total;

  }

  public function sumaSimple($num1, $num2){
  
    return $num1 + $num2;

  }


}

?>
