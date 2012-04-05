<?php
App::uses('Sonderfertigkeit', 'Model');

/**
 * Sonderfertigkeit Test Case
 *
 */
class SonderfertigkeitTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.sonderfertigkeit', 'app.talent', 'app.talentart', 'app.held', 'app.beschreibung', 'app.wert', 'app.eigenschaft', 'app.eigenschaften_held', 'app.helden_sonderfertigkeit', 'app.helden_talent', 'app.vorteil', 'app.helden_vorteil', 'app.zauber', 'app.repraesentation', 'app.helden_zauber');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sonderfertigkeit = ClassRegistry::init('Sonderfertigkeit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sonderfertigkeit);

		parent::tearDown();
	}

}
