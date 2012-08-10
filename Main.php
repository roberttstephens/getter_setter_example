<?php
/**
 * @file
 * Call Kelsey.
 */

require 'People.php';
require 'Employee.php';
require 'Client.php';

$tyler = new Employee();
$tyler->givenName = 'Tyler';
$tyler->familyName = 'Stephens';
$tyler->suffix = '';
$tyler->phoneNumber = '1234567';
$tyler->title = 'Developer';

$kelsey = new Employee();
$kelsey->givenName = 'fName';
$kelsey->familyName = 'lName';
$kelsey->suffix = '';
$kelsey->phoneNumber = '1234567';
$kelsey->title = 'Accountant';
$tyler->call($kelsey);
