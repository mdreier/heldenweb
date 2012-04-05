<?php
App::uses('HeldenZauberController', 'Controller');

/**
 * TestHeldenZauberController *
 */
class TestHeldenZauberController extends HeldenZauberController {
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
 * HeldenZauberController Test Case
 *
 */
class HeldenZauberControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.helden_zauber', 'app.held', 'app.beschreibung', 'app.wert', 'app.eigenschaft', 'app.eigenschaften_held', 'app.sonderfertigkeit', 'app.talent', 'app.talentart', 'app.helden_sonderfertigkeit', 'app.helden_talent', 'app.vorteil', 'app.helden_vorteil', 'app.zauber', 'app.repraesentation');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HeldenZauber = new TestHeldenZauberController();
		$this->HeldenZauber->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HeldenZauber);

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
