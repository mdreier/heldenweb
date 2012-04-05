<?php
App::uses('Eigenschaft', 'Model');

/**
 * Eigenschaft Test Case
 *
 */
class EigenschaftTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.eigenschaft', 'app.held', 'app.beschreibung', 'app.wert', 'app.eigenschaften_held', 'app.sonderfertigkeit', 'app.talent', 'app.talentart', 'app.helden_talent', 'app.helden_sonderfertigkeit', 'app.vorteil', 'app.helden_vorteil', 'app.zauber', 'app.repraesentation', 'app.helden_zauber');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Eigenschaft = ClassRegistry::init('Eigenschaft');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Eigenschaft);

		parent::tearDown();
	}

}
