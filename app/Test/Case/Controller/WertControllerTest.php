<?php
App::uses('WertController', 'Controller');

/**
 * TestWertController *
 */
class TestWertController extends WertController {
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
 * WertController Test Case
 *
 */
class WertControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.wert', 'app.held', 'app.beschreibung', 'app.eigenschaft', 'app.eigenschaften_held', 'app.sonderfertigkeit', 'app.talent', 'app.talentart', 'app.helden_talent', 'app.helden_sonderfertigkeit', 'app.vorteil', 'app.helden_vorteil', 'app.zauber', 'app.repraesentation', 'app.helden_zauber');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Wert = new TestWertController();
		$this->Wert->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Wert);

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
