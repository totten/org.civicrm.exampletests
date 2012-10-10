<?php

/**
 * This is a basic class which provides some logic that we want to test.
 */
class CRM_Exampletests_Example {

  /**
   * Add a new row to database
   *
   * @param string $fullName
   * @return void
   */
  public static function insertSomeData($fullName) {
    $params = array(
      1 => array($fullName, 'String')
    );
    CRM_Core_DAO::executeQuery('INSERT INTO civicrm_exampletests (full_name) VALUES (%1)', $params);
  }
}