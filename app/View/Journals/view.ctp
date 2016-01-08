<div class="journals view">
<h2><?php echo __('Journal'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($journal['Payee']['id'], array('controller' => 'payees', 'action' => 'view', $journal['Payee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail'); ?></dt>
		<dd>
			<?php echo $this->Html->link($journal['Detail']['id'], array('controller' => 'details', 'action' => 'view', $journal['Detail']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payed Date'); ?></dt>
		<dd>
			<?php echo h($journal['Journal']['payed_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Journal'), array('action' => 'edit', $journal['Journal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Journal'), array('action' => 'delete', $journal['Journal']['id']), array(), __('Are you sure you want to delete # %s?', $journal['Journal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Journals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payees'), array('controller' => 'payees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payee'), array('controller' => 'payees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Details'), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail'), array('controller' => 'details', 'action' => 'add')); ?> </li>
	</ul>
</div>
