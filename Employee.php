<?php

/**
 * Employees are people.
 */
class Employee extends Person {
  private $title;
  private $billingRate;

  /**
   * Call another person.
   *
   * @param Object
   *   $person
   *   Person who is being called.
   */
  public function call(Person $person) {
    if (isset($person->givenName)) {
      echo "Calling $person->givenName!\n";
    }
  }
}
