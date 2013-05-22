<div class="versionComposants form">
<?php echo $this->Form->create('VersionComposant'); ?>
	<fieldset>
		<legend><?php echo __('Edit Version Composant'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('numero_version');
		//echo $this->Form->input('composant_logiciel_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('VersionComposant.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('VersionComposant.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Version Composants'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Composant Logiciels'), array('controller' => 'composant_logiciels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Composant L'), array('controller' => 'composant_logiciels', 'action' => 'add')); ?> </li>
	</ul>
</div>
