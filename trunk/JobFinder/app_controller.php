<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
	function checkSession(){
		
	// fill $username with session data
	$jobseeker = $this->Session->read('Jobseeker');

	// if the $username is empty,
	// send user to login page
	if (!$jobseeker){
		$this->redirect('/jobseekers/login');
		exit();
	} /*else {
		// if $username is not empty,
		// check to make sure it's correct
		$results = $this->Jobseeker->findByEmail($jobseeker);

		// if not correct, send to login page
		if(!$results){
			$this->Session->delete('Jobseeker');
			$this->Session->setFlash('Incorrect session data.');
			$this->redirect('/jobseekers/login');
			exit();
		}

		// otherwise set $user variable as users email address
		$this->set('Jobseeker', $results['Jobseeker']['email']);
	}
	}*/
}
}
