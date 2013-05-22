<div class="composantLogiciels index">
	<h2><?php echo __('Composant Logiciels'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titre'); ?></th>
			<th><?php echo $this->Paginator->sort('type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nature_id'); ?></th>
			<th><?php echo $this->Paginator->sort('license_id'); ?></th>
			<th><?php echo $this->Paginator->sort('version_composant_id'); ?></th>
			<th><?php echo $this->Paginator->sort('taux'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($composantLogiciels as $composantLogiciel): ?>
	<tr>
		<td><?php echo h($composantLogiciel['ComposantLogiciel']['id']); ?>&nbsp;</td>
		<td><?php echo h($composantLogiciel['ComposantLogiciel']['titre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($composantLogiciel['Type']['libelle'], array('controller' => 'types', 'action' => 'view', $composantLogiciel['Type']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($composantLogiciel['Nature']['type'], array('controller' => 'natures', 'action' => 'view', $composantLogiciel['Nature']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($composantLogiciel['License']['type'], array('controller' => 'licenses', 'action' => 'view', $composantLogiciel['License']['id'])); ?>
		</td>
		<td>
			<?php
                            //echo $this->Html->link($composantLogiciel['VersionComposant']['numero_version'], array('controller' => 'version_composants', 'action' => 'view', $composantLogiciel['VersionComposant']['id'])); 
                            echo h($composantLogiciel['VersionComposant']['numero_version']);
                        ?>
		&nbsp;</td>
		<td><?php echo h($composantLogiciel['ComposantLogiciel']['taux']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Voir'), array('action' => 'view', $composantLogiciel['ComposantLogiciel']['id'])); ?>
			<?php echo $this->Html->link(__('Edition'), array('controller'=>'versioncomposants','action' => 'edit', $composantLogiciel['VersionComposant']['id'])); ?>
			<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $composantLogiciel['ComposantLogiciel']['id']), null, __('Are you sure you want to delete # %s?', $composantLogiciel['ComposantLogiciel']['id'])); ?>
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
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul style="margin-right: -45px">
		<li><?php echo $this->Html->link(__('Ajouter Composant Logiciel'), array('action' => 'add')); ?></li>
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
