<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	
	<title>
		Commude PH
	</title>
	<?php

		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->script('jquery/jquery.min.js');
		echo $this->Html->script('bootstrap.min.js');
		echo $this->Html->script('commude.js');
		echo $this->Html->css('bootstrap/css/bootstrap.min');
		echo $this->Html->css('bootstrap/css/custom');

		//datepicker
		echo $this->Html->script('datepicker/datepicker.min.js');
		echo $this->Html->script('datepicker/datepicker.min.js');
		echo $this->Html->script('datepicker/i18n/datepicker.en.js');
		echo $this->Html->css('datepicker/datepicker.min');

		//validator
		 echo $this->Html->script('validator/bootstrap-validate.js');
		 echo $this->Html->script('validator/jquery.validate.min.js');
		 echo $this->Html->script('validator/additional-methods.min.js');

	?>
</head>
<body>
	<div id="container">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
	    <div class="container">
	      <a class="navbar-brand" href="/CommudePH"> CommudePH </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
		      <div class="collapse navbar-collapse" id="navbarResponsive">
		        <ul class="navbar-nav ml-auto">
		          <li class="nav-item active">
		            <a class="nav-link" href="/CommudePH">To-Do-List
		            </a>
		          </li>
		        </ul>
		      </div>
	    </div>
  	</nav>
		<div id="content" class="container">
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
</body>
<footer>
	<div class="footer-below">
		<div class="" style="text-align: center;">
			<font style="color: black;" face="verdana" size="1">CREATED BY</font>
			<strong style="color: green; text-decoration: blink;">
			<font face="verdana" size="1.5">Rafael Guerra</font>
			</strong>
		</div>
	</div>
</footer>
</html>
