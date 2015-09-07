<?php

/*Form login
 * 
 */
echo '<h1>Money-Lover Register User</h1>';
echo $this->Form->create('User', array('action' => 'save'));
echo $this->Form->input('username');
echo $this->Form->input('password', array('type' => 'password'));
echo $this->Form->input('email');
echo $this->Form->end('Register');