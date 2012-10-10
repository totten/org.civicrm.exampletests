<?php

require_once 'CiviTest/CiviUnitTestCase.php';

/**
 * This is an example test-case which demonstrates 
 */
class CRM_Exampletests_ExampleTest extends CiviUnitTestCase {

  function setUp() {
    // If your test manipulates any SQL tables, then you should truncate
    // them to ensure a consisting starting point for all tests
    $this->quickCleanup(array('civicrm_exampletests'));
    parent::setUp();
  }

  function tearDown() {
    parent::tearDown();
  }

  function testInsertFoo() {
    // basic assertion
    $this->assertEquals(49, 7*7);

    // basic database assertion
    $this->assertDBQuery(0, 'SELECT count(*) FROM civicrm_exampletests');

    // run code with a side-effect on database
    CRM_Exampletests_Example::insertSomeData('testInsertFoo');

    // another database assertion
    $this->assertDBQuery(1, 'SELECT count(*) FROM civicrm_exampletests');
    $this->assertDBQuery(1, 'SELECT count(*) FROM civicrm_exampletests WHERE full_name = "testInsertFoo"');
  }

  function testInsertBar() {
    // basic database assertion
    $this->assertDBQuery(0, 'SELECT count(*) FROM civicrm_exampletests');

    // run code with a side-effect on database
    CRM_Exampletests_Example::insertSomeData('testInsertBar');

    // another database assertion
    $this->assertDBQuery(1, 'SELECT count(*) FROM civicrm_exampletests');
    $this->assertDBQuery(1, 'SELECT count(*) FROM civicrm_exampletests WHERE full_name = "testInsertBar"');
  }

}