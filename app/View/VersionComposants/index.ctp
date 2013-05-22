<div class="versionComposants index">
	<h2><?php echo __('Version Composants'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_version'); ?></th>
			<th><?php echo $this->Paginator->sort('composant_logiciel_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($versionComposants as $versionComposant): ?>
	<tr>
		<td><?php echo h($versionComposant['VersionComposant']['id']); ?>&nbsp;</td>
		<td><?php echo h($versionComposant['VersionComposant']['numero_version']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($versionComposant['ComposantL']['titre'], array('controller' => 'composant_logiciels', 'action' => 'view', $versionComposant['ComposantL']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $versionComposant['VersionComposant']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $versionComposant['VersionComposant']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $versionComposant['VersionComposant']['id']), null, __('Are you sure you want to delete # %s?', $versionComposant['VersionComposant']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Version Composant'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Composant Logiciels'), array('controller' => 'composant_logiciels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Composant L'), array('controller' => 'composant_logiciels', 'action' => 'add')); ?> </li>
	</ul>
</div>
