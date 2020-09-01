<?php

class Calculatrice
{
  private static $x;
  private static $y;

  // le contructeur :
  public function __construct($x, $y) {
    self::$x = $x;
    self::$y = $y;
  }

  public static function addition() {
    return (self::$x + self::$y);
  }

  public static function soustraction() {
    return (self::$x - self::$y);
  }

  public static function multiplication() {
    return (self::$x * self::$y);
  }

  public static function division() {
    return (self::$x / self::$y);
  }

  public static function modulo() {
    return (self::$x % self::$y);
  }

}
