<?php 
if(!$session->check('Auth.Jobseeker')){
echo $html->link('Login', array('controller' => 'jobseekers', 'action' => 'login')); 
} else {
$username = $session->read('Auth.Jobseeker.first_name');
echo " Hello ". $username ."&nbsp;";
echo $html->link('Logout', array('controller' => 'jobseekers', 'action' => 'logout')); 
}
?>