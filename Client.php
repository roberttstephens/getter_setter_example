<?php
/**
 * @file
 * Define functionality for Clients.
 */

/**
 * Clients are technically people too.
 */
class Client extends Person {
  private $title;
  private $billingAddress;
  private $accountBalance;

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
