<div class="produitLogiciels form">
<?php echo $this->Form->create('ProduitLogiciel'); ?>
	<fieldset>
		<legend><?php echo __('Ajouter un Produit Logiciel'); ?></legend>
	<?php
		echo $this->Form->input('titre',array('label'=>'Titre','placeholder'=>'Titre'));
		echo $this->Form->input('version',array('label'=>'Version','placeholder'=>'Version'));
		echo $this->Form->input('etat_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
    <p style="text-align: right"><a href="../users" class="b">Retour Menu</a></p>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Liste Produit Logiciels'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Liste Etats'), array('controller' => 'etats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Ajouter Etat'), array('controller' => 'etats', 'action' => 'add')); ?> </li>
	</ul>

</div>
