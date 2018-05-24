<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Action[]|\Cake\Collection\CollectionInterface $actions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Action'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Goals'), ['controller' => 'Goals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Goal'), ['controller' => 'Goals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Action Logs'), ['controller' => 'ActionLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Action Log'), ['controller' => 'ActionLogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actions index large-9 medium-8 columns content">
    <h3><?= __('Actions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('goal_id') ?></th>
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
            <?php foreach ($actions as $action): ?>
            <tr>
                <td><?= $this->Number->format($action->id) ?></td>
                <td><?= $action->has('user') ? $this->Html->link($action->user->id, ['controller' => 'Users', 'action' => 'view', $action->user->id]) : '' ?></td>
                <td><?= $action->has('goal') ? $this->Html->link($action->goal->id, ['controller' => 'Goals', 'action' => 'view', $action->goal->id]) : '' ?></td>
                <td><?= h($action->trial) ?></td>
                <td><?= h($action->running) ?></td>
                <td><?= $this->Number->format($action->order) ?></td>
                <td><?= $this->Number->format($action->cycle_time) ?></td>
                <td><?= $this->Number->format($action->cancell_penalty_money) ?></td>
                <td><?= $this->Number->format($action->failure_penalty_money) ?></td>
                <td><?= h($action->end_time) ?></td>
                <td><?= h($action->next_time) ?></td>
                <td><?= h($action->success_model_image_url) ?></td>
                <td><?= h($action->created) ?></td>
                <td><?= h($action->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $action->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $action->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $action->id], ['confirm' => __('Are you sure you want to delete # {0}?', $action->id)]) ?>
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
