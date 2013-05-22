<div class="produitLogiciels form">
<?php echo $this->Form->create('ProduitLogiciel'); ?>
	<fieldset>
		<legend><?php echo __('Edit Produit Logiciel'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titre');
		echo $this->Form->input('version');
		echo $this->Form->input('etat_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $this->Form->value('ProduitLogiciel.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProduitLogiciel.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Liste Produit Logiciels'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Liste Etats'), array('controller' => 'etats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Ajouter Etat'), array('controller' => 'etats', 'action' => 'add')); ?> </li>
	</ul>
</div>
