<?php
App::uses('EigenschaftenHeldenController', 'Controller');

/**
 * TestEigenschaftenHeldenController *
 */
class TestEigenschaftenHeldenController extends EigenschaftenHeldenController {
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
 * EigenschaftenHeldenController Test Case
 *
 */
class EigenschaftenHeldenControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.eigenschaften_held', 'app.held', 'app.beschreibung', 'app.wert', 'app.eigenschaft', 'app.sonderfertigkeit', 'app.talent', 'app.talentart', 'app.helden_sonderfertigkeit', 'app.helden_talent', 'app.vorteil', 'app.helden_vorteil', 'app.zauber', 'app.repraesentation', 'app.helden_zauber');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EigenschaftenHelden = new TestEigenschaftenHeldenController();
		$this->EigenschaftenHelden->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EigenschaftenHelden);

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
