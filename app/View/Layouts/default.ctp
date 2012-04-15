<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

 $cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<?php //echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css');

		echo $this->Html->script('http://code.jquery.com/jquery-1.7.1.min.js');
		echo $this->Html->script('http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
	<div data-role="page">

		<div data-role="header">
			<h1>Helden</h1>
			<?php echo $this->Html->link('Helden', array('controller' => 'Helden', 'action' => 'index'), array('data-icon' => 'home', 'data-iconpos' => 'notext', 'data-direction' => 'reverse')); ?>
		</div> <!-- header -->

		<div data-role="content">

				<?php echo $this->Session->flash(); ?>

				<?php echo $this->fetch('content'); ?>

		</div> <!-- content -->

		<div data-role="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div> <!-- footer -->
	</div> <!-- page -->
</body>
</html>
