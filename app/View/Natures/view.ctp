<div class="natures view">
<h2><?php  echo __('Nature'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($nature['Nature']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($nature['Nature']['type']); ?>
			&nbsp;
		</dd>
	</dl>
<p style="text-align: right" ><a href="../../natures" class="b">Retour Nature</a></p>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Modifier Nature'), array('action' => 'edit', $nature['Nature']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Supprimer Nature'), array('action' => 'delete', $nature['Nature']['id']), null, __('Are you sure you want to delete # %s?', $nature['Nature']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Liste Natures'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Ajouter Nature'), array('action' => 'add')); ?> </li>
	</ul>
</div>
