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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php echo $this->element('css_script'); ?>
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

		<?php echo $this->element('footer'); ?>
	</div> <!-- page -->
</body>
</html>
