<div class="etats form">
<?php echo $this->Form->create('Etat'); ?>
	<fieldset>
		<legend><?php echo __('Add Etat'); ?></legend>
	<?php
		echo $this->Form->input('etat');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Etats'), array('action' => 'index')); ?></li>
	</ul>
</div>
