<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Action $action
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Action'), ['action' => 'edit', $action->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Action'), ['action' => 'delete', $action->id], ['confirm' => __('Are you sure you want to delete # {0}?', $action->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Actions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Action'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Goals'), ['controller' => 'Goals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Goal'), ['controller' => 'Goals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Action Logs'), ['controller' => 'ActionLogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Action Log'), ['controller' => 'ActionLogs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actions view large-9 medium-8 columns content">
    <h3><?= h($action->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $action->has('user') ? $this->Html->link($action->user->id, ['controller' => 'Users', 'action' => 'view', $action->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Goal') ?></th>
            <td><?= $action->has('goal') ? $this->Html->link($action->goal->id, ['controller' => 'Goals', 'action' => 'view', $action->goal->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Success Model Image Url') ?></th>
            <td><?= h($action->success_model_image_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($action->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $this->Number->format($action->order) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cycle Time') ?></th>
            <td><?= $this->Number->format($action->cycle_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cancell Penalty Money') ?></th>
            <td><?= $this->Number->format($action->cancell_penalty_money) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Failure Penalty Money') ?></th>
            <td><?= $this->Number->format($action->failure_penalty_money) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Time') ?></th>
            <td><?= h($action->end_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Next Time') ?></th>
            <td><?= h($action->next_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($action->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($action->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trial') ?></th>
            <td><?= $action->trial ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Running') ?></th>
            <td><?= $action->running ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Action') ?></h4>
        <?= $this->Text->autoParagraph(h($action->action)); ?>
    </div>
    <div class="row">
        <h4><?= __('Memo') ?></h4>
        <?= $this->Text->autoParagraph(h($action->memo)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Action Logs') ?></h4>
        <?php if (!empty($action->action_logs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Result') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Action Id') ?></th>
                <th scope="col"><?= __('Money') ?></th>
                <th scope="col"><?= __('Image Url') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($action->action_logs as $actionLogs): ?>
            <tr>
                <td><?= h($actionLogs->id) ?></td>
                <td><?= h($actionLogs->result) ?></td>
                <td><?= h($actionLogs->user_id) ?></td>
                <td><?= h($actionLogs->action_id) ?></td>
                <td><?= h($actionLogs->money) ?></td>
                <td><?= h($actionLogs->image_url) ?></td>
                <td><?= h($actionLogs->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ActionLogs', 'action' => 'view', $actionLogs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ActionLogs', 'action' => 'edit', $actionLogs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ActionLogs', 'action' => 'delete', $actionLogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actionLogs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
