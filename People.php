<?php

abstract class Person {
  private $prefix;
  private $givenName;
  private $familyName;
  private $suffix;
  private $phoneNumber;

  /**
   * Being able to call somebody is necessary.
   */
  abstract protected function call(Person $person);

  /**
   * Getters
   */
  public function __get($property) {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  /**
   * Setters
   */
  public function __set($property, $value) {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }
  }

  /**
   * Checks if private property is set.
   */
  public function __isset($property) {
    return isset($this->$property);
  }
}
