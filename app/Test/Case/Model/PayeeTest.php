<?php
App::uses('Payee', 'Model');

/**
 * Payee Test Case
 *
 */
class PayeeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.payee',
		'app.journal',
		'app.detail'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Payee = ClassRegistry::init('Payee');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Payee);

		parent::tearDown();
	}

}
