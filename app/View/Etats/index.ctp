<div class="etats index">
	<h2><?php echo __('Etats'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
			<th><?php echo $this->Paginator->sort('etat'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($etats as $etat): ?>
	<tr>
		<!--<td><?php echo h($etat['Etat']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($etat['Etat']['etat']); ?>&nbsp;</td>
                <td class="actions" style="text-align: left">
			<?php echo $this->Html->link(__('Voir'), array('action' => 'view', $etat['Etat']['id'])); ?>
			<?php echo $this->Html->link(__('Edition'), array('action' => 'edit', $etat['Etat']['id'])); ?>
			<?php echo $this->Form->postLink(__('Supprimer'), array('action' => 'delete', $etat['Etat']['id']), null, __('Etes-vous sûr que vous voulez supprimer l\'Etat : %s?', $etat['Etat']['etat'])); ?>
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
		echo $this->Paginator->prev('< ' . __('Précédent'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Suivant') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Etat'), array('action' => 'add')); ?></li>
	</ul>
</div>
