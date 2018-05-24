<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Goal $goal
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Goal'), ['action' => 'edit', $goal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Goal'), ['action' => 'delete', $goal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $goal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Goals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Goal'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Goal Logs'), ['controller' => 'GoalLogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Goal Log'), ['controller' => 'GoalLogs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="goals view large-9 medium-8 columns content">
    <h3><?= h($goal->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $goal->has('user') ? $this->Html->link($goal->user->id, ['controller' => 'Users', 'action' => 'view', $goal->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Success Model Image Url') ?></th>
            <td><?= h($goal->success_model_image_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($goal->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $this->Number->format($goal->order) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cycle Time') ?></th>
            <td><?= $this->Number->format($goal->cycle_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cancell Penalty Money') ?></th>
            <td><?= $this->Number->format($goal->cancell_penalty_money) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Failure Penalty Money') ?></th>
            <td><?= $this->Number->format($goal->failure_penalty_money) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Time') ?></th>
            <td><?= h($goal->end_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Next Time') ?></th>
            <td><?= h($goal->next_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($goal->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($goal->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trial') ?></th>
            <td><?= $goal->trial ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Running') ?></th>
            <td><?= $goal->running ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Goal') ?></h4>
        <?= $this->Text->autoParagraph(h($goal->goal)); ?>
    </div>
    <div class="row">
        <h4><?= __('Memo') ?></h4>
        <?= $this->Text->autoParagraph(h($goal->memo)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Actions') ?></h4>
        <?php if (!empty($goal->actions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Action') ?></th>
                <th scope="col"><?= __('Memo') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Goal Id') ?></th>
                <th scope="col"><?= __('Trial') ?></th>
                <th scope="col"><?= __('Running') ?></th>
                <th scope="col"><?= __('Order') ?></th>
                <th scope="col"><?= __('Cycle Time') ?></th>
                <th scope="col"><?= __('Cancell Penalty Money') ?></th>
                <th scope="col"><?= __('Failure Penalty Money') ?></th>
                <th scope="col"><?= __('End Time') ?></th>
                <th scope="col"><?= __('Next Time') ?></th>
                <th scope="col"><?= __('Success Model Image Url') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($goal->actions as $actions): ?>
            <tr>
                <td><?= h($actions->id) ?></td>
                <td><?= h($actions->action) ?></td>
                <td><?= h($actions->memo) ?></td>
                <td><?= h($actions->user_id) ?></td>
                <td><?= h($actions->goal_id) ?></td>
                <td><?= h($actions->trial) ?></td>
                <td><?= h($actions->running) ?></td>
                <td><?= h($actions->order) ?></td>
                <td><?= h($actions->cycle_time) ?></td>
                <td><?= h($actions->cancell_penalty_money) ?></td>
                <td><?= h($actions->failure_penalty_money) ?></td>
                <td><?= h($actions->end_time) ?></td>
                <td><?= h($actions->next_time) ?></td>
                <td><?= h($actions->success_model_image_url) ?></td>
                <td><?= h($actions->created) ?></td>
                <td><?= h($actions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Actions', 'action' => 'view', $actions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Actions', 'action' => 'edit', $actions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Actions', 'action' => 'delete', $actions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Goal Logs') ?></h4>
        <?php if (!empty($goal->goal_logs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Result') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Goal Id') ?></th>
                <th scope="col"><?= __('Money') ?></th>
                <th scope="col"><?= __('Image Url') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($goal->goal_logs as $goalLogs): ?>
            <tr>
                <td><?= h($goalLogs->id) ?></td>
                <td><?= h($goalLogs->result) ?></td>
                <td><?= h($goalLogs->user_id) ?></td>
                <td><?= h($goalLogs->goal_id) ?></td>
                <td><?= h($goalLogs->money) ?></td>
                <td><?= h($goalLogs->image_url) ?></td>
                <td><?= h($goalLogs->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'GoalLogs', 'action' => 'view', $goalLogs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'GoalLogs', 'action' => 'edit', $goalLogs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'GoalLogs', 'action' => 'delete', $goalLogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $goalLogs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
