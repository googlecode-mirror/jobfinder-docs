<?php
/* Employers Test cases generated on: 2010-09-24 16:09:29 : 1285316729*/
App::import('Controller', 'Employers');

class TestEmployersController extends EmployersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EmployersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.employer');

	function startTest() {
		$this->Employers =& new TestEmployersController();
		$this->Employers->constructClasses();
	}

	function endTest() {
		unset($this->Employers);
		ClassRegistry::flush();
	}

}
?>