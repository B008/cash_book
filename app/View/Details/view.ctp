<div class="details view">
<h2><?php echo __('Detail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($detail['Detail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($detail['Detail']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($detail['Detail']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail Name'); ?></dt>
		<dd>
			<?php echo h($detail['Detail']['detail_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detail'), array('action' => 'edit', $detail['Detail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detail'), array('action' => 'delete', $detail['Detail']['id']), array(), __('Are you sure you want to delete # %s?', $detail['Detail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Journals'), array('controller' => 'journals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journal'), array('controller' => 'journals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Journals'); ?></h3>
	<?php if (!empty($detail['Journal'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Payee Id'); ?></th>
		<th><?php echo __('Detail Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Payed Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($detail['Journal'] as $journal): ?>
		<tr>
			<td><?php echo $journal['id']; ?></td>
			<td><?php echo $journal['created']; ?></td>
			<td><?php echo $journal['modified']; ?></td>
			<td><?php echo $journal['payee_id']; ?></td>
			<td><?php echo $journal['detail_id']; ?></td>
			<td><?php echo $journal['amount']; ?></td>
			<td><?php echo $journal['payed_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'journals', 'action' => 'view', $journal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'journals', 'action' => 'edit', $journal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'journals', 'action' => 'delete', $journal['id']), array(), __('Are you sure you want to delete # %s?', $journal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Journal'), array('controller' => 'journals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
