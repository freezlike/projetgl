<div class="composantLogiciels form">
<?php echo $this->Form->create('ComposantLogiciel'); ?>
	<fieldset>
		<legend><?php echo __('Edit Composant Logiciel'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titre');
		echo $this->Form->input('type_id');
		echo $this->Form->input('nature_id');
		echo $this->Form->input('license_id');
		//echo $this->Form->input('version_composant_id');
                echo $this->Form->input('VersionComposant.numero_version');
                //echo $this->Form->input('VersionComposant.composant_logiciel_id',array('value'=>'ComposantLogiciel.id'));
		echo $this->Form->input('taux');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ComposantLogiciel.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ComposantLogiciel.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Composant Logiciels'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Natures'), array('controller' => 'natures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nature'), array('controller' => 'natures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Licenses'), array('controller' => 'licenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New License'), array('controller' => 'licenses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Version Composants'), array('controller' => 'version_composants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Version Composant'), array('controller' => 'version_composants', 'action' => 'add')); ?> </li>
	</ul>
</div>
