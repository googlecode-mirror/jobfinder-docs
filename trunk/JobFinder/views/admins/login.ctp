<?php
    echo $session->flash('auth');
    echo $form->create('Admin', array('action' => 'login'));
    echo $form->input('username');
    echo $form->input('password');
    echo $form->end('Login');
?>