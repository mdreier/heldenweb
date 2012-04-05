<?php
App::uses('HeldenTalentController', 'Controller');

/**
 * TestHeldenTalentController *
 */
class TestHeldenTalentController extends HeldenTalentController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * HeldenTalentController Test Case
 *
 */
class HeldenTalentControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.helden_talent', 'app.held', 'app.beschreibung', 'app.wert', 'app.eigenschaft', 'app.eigenschaften_held', 'app.sonderfertigkeit', 'app.talent', 'app.talentart', 'app.helden_sonderfertigkeit', 'app.vorteil', 'app.helden_vorteil', 'app.zauber', 'app.repraesentation', 'app.helden_zauber');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HeldenTalent = new TestHeldenTalentController();
		$this->HeldenTalent->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HeldenTalent);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}
/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}
/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}
/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}
}
