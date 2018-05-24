<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Goal[]|\Cake\Collection\CollectionInterface $goals
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Goal'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Goal Logs'), ['controller' => 'GoalLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Goal Log'), ['controller' => 'GoalLogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="goals index large-9 medium-8 columns content">
    <h3><?= __('Goals') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('trial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('running') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cycle_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cancell_penalty_money') ?></th>
                <th scope="col"><?= $this->Paginator->sort('failure_penalty_money') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('next_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('success_model_image_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($goals as $goal): ?>
            <tr>
                <td><?= $this->Number->format($goal->id) ?></td>
                <td><?= $goal->has('user') ? $this->Html->link($goal->user->id, ['controller' => 'Users', 'action' => 'view', $goal->user->id]) : '' ?></td>
                <td><?= h($goal->trial) ?></td>
                <td><?= h($goal->running) ?></td>
                <td><?= $this->Number->format($goal->order) ?></td>
                <td><?= $this->Number->format($goal->cycle_time) ?></td>
                <td><?= $this->Number->format($goal->cancell_penalty_money) ?></td>
                <td><?= $this->Number->format($goal->failure_penalty_money) ?></td>
                <td><?= h($goal->end_time) ?></td>
                <td><?= h($goal->next_time) ?></td>
                <td><?= h($goal->success_model_image_url) ?></td>
                <td><?= h($goal->created) ?></td>
                <td><?= h($goal->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $goal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $goal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $goal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $goal->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
