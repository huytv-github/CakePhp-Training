<?php

/*Form login
 * 
 */
echo $this->Form->create();
echo $this->Form->input('user');
echo $this->Form->input('password', array('type' => 'password'));
echo $this->Form->end();