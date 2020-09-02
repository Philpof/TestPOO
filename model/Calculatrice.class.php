<?php

class Calculatrice
{
  // private static $x;
  // private static $y;
  //
  // // le contructeur :
  // public function __construct($x, $y) {
  //   self::$x = $x;
  //   self::$y = $y;
  // }

  public static function addition($x, $y) {
    return ($x + $y);
  }

  public static function soustraction($x, $y) {
    return ($x - $y);
  }

  public static function multiplication($x, $y) {
    return ($x * $y);
  }

  public static function division($x, $y) {
    return ($x / $y);
  }

  public static function modulo($x, $y) {
    return ($x % $y);
  }

}
