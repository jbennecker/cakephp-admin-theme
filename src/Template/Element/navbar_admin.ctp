<?php
/**
 * @var \App\View\AppView $this
 */

use Cake\Core\Configure;
use Cake\Utility\Inflector;

$controllers = Configure::read('AdminTheme.controllers');

?>
<nav class="navbar">
    <?php
    foreach ($controllers as $groups) {
        foreach ($groups as $controller) {
            echo $this->Html->link(
                Inflector::humanize($controller),
                [
                    'prefix' => 'admin',
                    'plugin' => false,
                    'controller' => $controller,
                    'action' => 'index',
                ],
                [
                    'class' => 'link',
                ]
            );
        }
        echo '<hr/>';
    }
    ?>
</nav>
