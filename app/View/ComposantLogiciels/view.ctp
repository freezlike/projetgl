<div class="composantLogiciels view">
<h2><?php  echo __('Composant Logiciel'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($composantLogiciel['ComposantLogiciel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($composantLogiciel['ComposantLogiciel']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($composantLogiciel['Type']['libelle'], array('controller' => 'types', 'action' => 'view', $composantLogiciel['Type']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nature'); ?></dt>
		<dd>
			<?php echo $this->Html->link($composantLogiciel['Nature']['type'], array('controller' => 'natures', 'action' => 'view', $composantLogiciel['Nature']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('License'); ?></dt>
		<dd>
			<?php echo $this->Html->link($composantLogiciel['License']['type'], array('controller' => 'licenses', 'action' => 'view', $composantLogiciel['License']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Version Composant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($composantLogiciel['VersionComposant']['numero_version'], array('controller' => 'version_composants', 'action' => 'view', $composantLogiciel['VersionComposant']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Taux'); ?></dt>
		<dd>
			<?php echo h($composantLogiciel['ComposantLogiciel']['taux']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Composant Logiciel'), array('action' => 'edit', $composantLogiciel['ComposantLogiciel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Composant Logiciel'), array('action' => 'delete', $composantLogiciel['ComposantLogiciel']['id']), null, __('Are you sure you want to delete # %s?', $composantLogiciel['ComposantLogiciel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Composant Logiciels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Composant Logiciel'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Natures'), array('controller' => 'natures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nature'), array('controller' => 'natures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Licenses'), array('controller' => 'licenses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New License'), array('controller' => 'licenses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Version Composants'), array('controller' => 'version_composants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Version Composant'), array('controller' => 'version_composants', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Version Composants'); ?></h3>
	<?php if (!empty($composantLogiciel['VersionC'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $composantLogiciel['VersionC']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Numero Version'); ?></dt>
		<dd>
	<?php echo $composantLogiciel['VersionC']['numero_version']; ?>
&nbsp;</dd>
		<dt><?php echo __('Composant Logiciel Id'); ?></dt>
		<dd>
	<?php echo $composantLogiciel['VersionC']['composant_logiciel_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Version C'), array('controller' => 'version_composants', 'action' => 'edit', $composantLogiciel['VersionC']['id'])); ?></li>
			</ul>
		</div>
	</div>
	