		<?php $cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework'); ?>
		<div data-role="footer">
			<div class="center">
			HeldenWeb <?php echo Configure::read('HeldenWeb.version'); ?> powered by CakePHP
			<?php
			echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'data-rel' => 'external')
				);
			?>
			</div>
		</div> <!-- footer -->