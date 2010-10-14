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
	var $uses = array('Jobseeker','Employer','Admin'); 
	
	function checkJobSeekerSession(){	
		// fill $jobseeker with session data
		$jobseeker = $this->Session->read('Jobseeker');
	
		// if the $jobseeker is empty,
		// send user to login page
		if (!$jobseeker){
			$this->redirect('/jobseekers/login');
			exit();
		} 
		else {
        	// if $jobseeker is not empty,
            // check to make sure it's correct
            $results = $this->Jobseeker->findByEmail($jobseeker['Jobseeker']['email']);
            // if not correct, send to login page
            if(!$results){
	            $this->Session->delete('Jobseeker');
                $this->Session->setFlash('Incorrect session data.');
                $this->redirect('/jobseekers/login');
                exit();
            }
        }
	}
	
	function checkEmployerSession(){	
		// fill $employer with session data
		$employer = $this->Session->read('Employer');
	
		// if the $employer is empty,
		// send user to login page
		if (!$employer){
			$this->redirect('/employers/login');
			exit();
		}
		else {
        	// if $employer is not empty,
            // check to make sure it's correct
            $results = $this->Employer->findByEmail($jobseeker['Employer']['email']);
            // if not correct, send to login page
            if(!$results){
	            $this->Session->delete('Employer');
                $this->Session->setFlash('Incorrect session data.');
                $this->redirect('/employers/login');
                exit();
            }
        }
	}
	
	function checkAdminSession(){	
		// fill $admin with session data
		$admin = $this->Session->read('Admin');
	
		// if the $admin is empty,
		// send user to login page
		if (!$admin){
			$this->redirect('/admins/login');
			exit();
		}
		else {
        	// if $admin is not empty,
            // check to make sure it's correct
            $results = $this->Admin->findByUsername($jobseeker['Admin']['username']);
            // if not correct, send to login page
            if(!$results){
	            $this->Session->delete('Admin');
                $this->Session->setFlash('Incorrect session data.');
                $this->redirect('/admins/login');
                exit();
            }
        }
	}
}
