<div class="composantLogiciels form">
<?php echo $this->Form->create('ComposantLogiciel'); ?>
	<fieldset>
		<legend><?php echo __('Ajouter Composant Logiciel'); ?></legend>
	<?php
		echo $this->Form->input('titre');
		echo $this->Form->input('type_id');
		echo $this->Form->input('nature_id');
		echo $this->Form->input('license_id');
		//echo $this->Form->input('version_composant_id');
		echo $this->Form->input('VersionComposant.numero_version');
                echo $this->Form->input('taux');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Liste Composant Logiciels'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Liste Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Ajouter Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste Natures'), array('controller' => 'natures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Ajouter Nature'), array('controller' => 'natures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste Licenses'), array('controller' => 'licenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Ajouter License'), array('controller' => 'licenses', 'action' => 'add')); ?> </li>
<!--		<li><?php echo $this->Html->link(__('Liste Version Composants'), array('controller' => 'version_composants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Ajouter Version Composant'), array('controller' => 'version_composants', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
