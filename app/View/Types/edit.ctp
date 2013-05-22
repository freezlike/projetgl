<div class="types form">
<?php echo $this->Form->create('Type'); ?>
	<fieldset>
		<legend><?php echo __('Modifier Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('libelle');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Modifier')); ?>
    <p style="text-align: right" ><a href="../../types" class="b">Retour Menu</a></p>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Type.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Type.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Types'), array('action' => 'index')); ?></li>
	</ul>
</div>
