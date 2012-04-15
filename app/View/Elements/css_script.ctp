	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css');
		echo $this->Html->css('heldenWeb');

		echo $this->Html->script('http://code.jquery.com/jquery-1.7.1.min.js');
		echo $this->Html->script('http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>

	<meta name="viewport" content="width=device-width, initial-scale=1" />