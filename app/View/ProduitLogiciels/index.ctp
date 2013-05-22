<div class="produitLogiciels index">
	<h2><?php echo __('Produit Logiciels'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titre'); ?></th>
			<th><?php echo $this->Paginator->sort('version'); ?></th>
			<th><?php echo $this->Paginator->sort('etat_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($produitLogiciels as $produitLogiciel): ?>
	<tr>
		<td><?php echo h($produitLogiciel['ProduitLogiciel']['id']); ?>&nbsp;</td>
		<td><?php echo h($produitLogiciel['ProduitLogiciel']['titre']); ?>&nbsp;</td>
		<td><?php echo h($produitLogiciel['ProduitLogiciel']['version']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($produitLogiciel['Etat']['etat'], array('controller' => 'etats', 'action' => 'view', $produitLogiciel['Etat']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Voir'), array('action' => 'view', $produitLogiciel['ProduitLogiciel']['id'])); ?>
			<?php echo $this->Html->link(__('Modifier'), array('action' => 'edit', $produitLogiciel['ProduitLogiciel']['id'])); ?>
			<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $produitLogiciel['ProduitLogiciel']['id']), null, __('Are you sure you want to delete # %s?', $produitLogiciel['ProduitLogiciel']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} sur {:pages}, montrant {:current} enregistrements sur {:count} au total, à partir de l\'enregistrement {:start}, se terminant à {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('précédent'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('suivant') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
        <p style="text-align: right"><a href="users" class="b">Retour Menu</a></p>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
        <ul style="margin-right: -10px">
		<li><?php echo $this->Html->link(__('Ajouter Produit Logiciel'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Liste Etats'), array('controller' => 'etats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Ajouter Etat'), array('controller' => 'etats', 'action' => 'add')); ?> </li>
	</ul>
</div>
