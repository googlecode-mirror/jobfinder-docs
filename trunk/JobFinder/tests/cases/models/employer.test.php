<?php
/* Employer Test cases generated on: 2010-09-24 16:09:40 : 1285316680*/
App::import('Model', 'Employer');

class EmployerTestCase extends CakeTestCase {
	var $fixtures = array('app.employer');

	function startTest() {
		$this->Employer =& ClassRegistry::init('Employer');
	}

	function endTest() {
		unset($this->Employer);
		ClassRegistry::flush();
	}

}
?>