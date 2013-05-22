<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>

        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->meta('cake.icon');
        //echo $this->Html->css('bootstrap');
        //echo $this->Html->css('bootstrap-responsive');
        echo $this->Html->css('normalize');
        echo $this->Html->css('foundation');
        echo $this->Html->css('cake.generic');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <!--<style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>-->
        <title><?php echo $title_for_layout; ?></title>
    </head>
    <body>

        <div id="container" class="row-fluid">

            <div id="header" class="navbar-inner" style="background: #000;font-size: 12px;text-align: right;position: fixed;right: 10px;left: 0">
                <h1><?php //echo $this->Html->link($cakeDescription, 'http://cakephp.org');   ?></h1>
                <div id="user-nav" class="navbar-text pull-right" >
                    <?php
                    //echo $current_user['User']['role'];

                    if ($logged_in):
                        ?>
                        Bienvenue, <?php echo ucfirst($current_user['username']); ?> | <?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'), array('style' => 'color:#ff0000')); ?>

                    <?php else: ?>
                        <?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login'), array('style' => 'color:#fff')); ?>
<?php endif; ?>
                </div>
            </div>
            <div id="content" class="navbar navbar-inverse navbar-fixed-top">


                <br /><br />
                    <?php echo $this->Session->flash(); ?>
                <div class="span5">
<?php echo $this->fetch('content'); ?>
                </div>
            </div>
            <div id="footer" style="
                 background-color                : #000;
                 position			: fixed;
                 color                           : #fff;
                 bottom				: 0;
                 left				: 0;
                 right				: 0;
                 height				: 25px;">



                <p><b>GLdevTech</b></p>   
            </div>
        </div>
<?php echo $this->element('sql_dump'); ?>

    </body>
</html>