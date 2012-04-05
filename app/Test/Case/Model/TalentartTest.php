<?php
App::uses('Talentart', 'Model');

/**
 * Talentart Test Case
 *
 */
class TalentartTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.talentart', 'app.talent', 'app.sonderfertigkeit', 'app.held', 'app.beschreibung', 'app.wert', 'app.eigenschaft', 'app.eigenschaften_held', 'app.helden_sonderfertigkeit', 'app.helden_talent', 'app.vorteil', 'app.helden_vorteil', 'app.zauber', 'app.repraesentation', 'app.helden_zauber');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Talentart = ClassRegistry::init('Talentart');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Talentart);

		parent::tearDown();
	}

}
