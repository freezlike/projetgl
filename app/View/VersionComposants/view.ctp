<div class="versionComposants view">
<h2><?php  echo __('Version Composant'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($versionComposant['VersionComposant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Version'); ?></dt>
		<dd>
			<?php echo h($versionComposant['VersionComposant']['numero_version']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Composant L'); ?></dt>
		<dd>
			<?php echo $this->Html->link($versionComposant['ComposantL']['titre'], array('controller' => 'composant_logiciels', 'action' => 'view', $versionComposant['ComposantL']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Version Composant'), array('action' => 'edit', $versionComposant['VersionComposant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Version Composant'), array('action' => 'delete', $versionComposant['VersionComposant']['id']), null, __('Are you sure you want to delete # %s?', $versionComposant['VersionComposant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Version Composants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Version Composant'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Composant Logiciels'), array('controller' => 'composant_logiciels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Composant L'), array('controller' => 'composant_logiciels', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Composant Logiciels'); ?></h3>
	<?php if (!empty($versionComposant['ComposantLogiciel'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $versionComposant['ComposantLogiciel']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
	<?php echo $versionComposant['ComposantLogiciel']['titre']; ?>
&nbsp;</dd>
		<dt><?php echo __('Type Id'); ?></dt>
		<dd>
	<?php echo $versionComposant['ComposantLogiciel']['type_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Nature Id'); ?></dt>
		<dd>
	<?php echo $versionComposant['ComposantLogiciel']['nature_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('License Id'); ?></dt>
		<dd>
	<?php echo $versionComposant['ComposantLogiciel']['license_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Version Composant Id'); ?></dt>
		<dd>
	<?php echo $versionComposant['ComposantLogiciel']['version_composant_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Taux'); ?></dt>
		<dd>
	<?php echo $versionComposant['ComposantLogiciel']['taux']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Composant Logiciel'), array('controller' => 'composant_logiciels', 'action' => 'edit', $versionComposant['ComposantLogiciel']['id'])); ?></li>
			</ul>
		</div>
	</div>
	