<div class="etats view">
<h2><?php  echo __('Etat'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($etat['Etat']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($etat['Etat']['etat']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Etat'), array('action' => 'edit', $etat['Etat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Etat'), array('action' => 'delete', $etat['Etat']['id']), null, __('Are you sure you want to delete # %s?', $etat['Etat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Etats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etat'), array('action' => 'add')); ?> </li>
	</ul>
</div>
