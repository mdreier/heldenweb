<?php
App::uses('Repraesentation', 'Model');

/**
 * Repraesentation Test Case
 *
 */
class RepraesentationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.repraesentation', 'app.zauber', 'app.held', 'app.beschreibung', 'app.wert', 'app.eigenschaft', 'app.eigenschaften_held', 'app.sonderfertigkeit', 'app.talent', 'app.talentart', 'app.helden_talent', 'app.helden_sonderfertigkeit', 'app.vorteil', 'app.helden_vorteil', 'app.helden_zauber');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Repraesentation = ClassRegistry::init('Repraesentation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Repraesentation);

		parent::tearDown();
	}

}
