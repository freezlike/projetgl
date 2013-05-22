<div class="produitLogiciels view">
<h2><?php  echo __('Produit Logiciel'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($produitLogiciel['ProduitLogiciel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($produitLogiciel['ProduitLogiciel']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Version'); ?></dt>
		<dd>
			<?php echo h($produitLogiciel['ProduitLogiciel']['version']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo $this->Html->link($produitLogiciel['Etat']['etat'], array('controller' => 'etats', 'action' => 'view', $produitLogiciel['Etat']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul  style="margin-right: -30px">
		<li><?php echo $this->Html->link(__('Modifier Produit Logiciel'), array('action' => 'edit', $produitLogiciel['ProduitLogiciel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Supprimer Produit Logiciel'), array('action' => 'delete', $produitLogiciel['ProduitLogiciel']['id']), null, __('Are you sure you want to delete # %s?', $produitLogiciel['ProduitLogiciel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Liste Produit Logiciels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Ajouter Produit Logiciel'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste Etats'), array('controller' => 'etats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Ajouter Etat'), array('controller' => 'etats', 'action' => 'add')); ?> </li>
	</ul>
</div>
