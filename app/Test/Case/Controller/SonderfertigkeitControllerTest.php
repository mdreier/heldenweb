<?php
App::uses('SonderfertigkeitController', 'Controller');

/**
 * TestSonderfertigkeitController *
 */
class TestSonderfertigkeitController extends SonderfertigkeitController {
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
 * SonderfertigkeitController Test Case
 *
 */
class SonderfertigkeitControllerTestCase extends CakeTestCase {
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
		$this->Sonderfertigkeit = new TestSonderfertigkeitController();
		$this->Sonderfertigkeit->constructClasses();
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
