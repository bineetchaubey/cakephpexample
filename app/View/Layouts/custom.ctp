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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html ng-app>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
        // echo $this->Html->css('style');
		echo $this->Html->css('bootstrap.min.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<style>
          div#container{ 
          	 margin: 0 auto; width: 90%;
          }
	</style>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
	    	$('.dropdown-toggle').dropdown();
	 	});
     
	</script>
</head>
<body>
	<div id="container">
		<!-- <div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div> -->

		 <div class="navbar navbar-static" id="navbar-example">
              <div class="navbar-inner">
                <div style="width: auto;" class="container">
                  <a href="#" class="brand">RND about Cakephp</a>
                  <ul role="navigation" class="nav">
                    <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="drop1">Dropdown <b class="caret"></b></a>
                      <ul aria-labelledby="drop1" role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="http://google.com" tabindex="-1" role="menuitem">Action</a></li>
                        <li role="presentation"><a href="#anotherAction" tabindex="-1" role="menuitem">Another action</a></li>
                        <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Something else here</a></li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Separated link</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop2" href="#">Dropdown 2 <b class="caret"></b></a>
                      <ul aria-labelledby="drop2" role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Action</a></li>
                        <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Another action</a></li>
                        <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Something else here</a></li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="nav pull-right">
                    <li class="dropdown" id="fat-menu">
                      <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop3" href="#">Dropdown 3 <b class="caret"></b></a>
                      <ul aria-labelledby="drop3" role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Action</a></li>
                        <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Another action</a></li>
                        <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Something else here</a></li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php // echo $this->element('sql_dump'); ?>

   <?php 	echo $this->Html->script('bootstrap.min.js'); ?>
</body>
</html>
