<div class="journals index">
	<h2><?php echo __('Journals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('payee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('detail_id'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('payed_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($journals as $journal): ?>
	<tr>
		<td><?php echo h($journal['Journal']['id']); ?>&nbsp;</td>
		<td><?php echo h($journal['Journal']['created']); ?>&nbsp;</td>
		<td><?php echo h($journal['Journal']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($journal['Payee']['id'], array('controller' => 'payees', 'action' => 'view', $journal['Payee']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($journal['Detail']['id'], array('controller' => 'details', 'action' => 'view', $journal['Detail']['id'])); ?>
		</td>
		<td><?php echo h($journal['Journal']['amount']); ?>&nbsp;</td>
		<td><?php echo h($journal['Journal']['payed_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $journal['Journal']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $journal['Journal']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $journal['Journal']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $journal['Journal']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Journal'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Payees'), array('controller' => 'payees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payee'), array('controller' => 'payees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Details'), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail'), array('controller' => 'details', 'action' => 'add')); ?> </li>
	</ul>
</div>
