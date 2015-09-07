<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */
echo '<h1>Money-Lover</h1>';
echo $this->Html->link(
    'Register User',
    array('controller' => 'users', 'action' => 'register')
);
echo '|';
echo $this->Html->link(
    'Login',
    array('controller' => 'users', 'action' => 'login')
);

