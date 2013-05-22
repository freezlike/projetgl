<div class="versionComposants form">
<?php echo $this->Form->create('VersionComposant'); ?>
	<fieldset>
		<legend><?php echo __('Add Version Composant'); ?></legend>
	<?php
		echo $this->Form->input('numero_version');
		echo $this->Form->input('composant_logiciel_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Version Composants'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Composant Logiciels'), array('controller' => 'composant_logiciels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Composant L'), array('controller' => 'composant_logiciels', 'action' => 'add')); ?> </li>
	</ul>
</div>
