<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Action Logs'), ['controller' => 'ActionLogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Action Log'), ['controller' => 'ActionLogs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Goal Logs'), ['controller' => 'GoalLogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Goal Log'), ['controller' => 'GoalLogs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Goals'), ['controller' => 'Goals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Goal'), ['controller' => 'Goals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Display Cycle Time') ?></th>
            <td><?= h($user->display_cycle_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activate') ?></th>
            <td><?= $this->Number->format($user->activate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($user->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Action Logs') ?></h4>
        <?php if (!empty($user->action_logs)): ?>
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
            <?php foreach ($user->action_logs as $actionLogs): ?>
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
    <div class="related">
        <h4><?= __('Related Actions') ?></h4>
        <?php if (!empty($user->actions)): ?>
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
            <?php foreach ($user->actions as $actions): ?>
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
        <?php if (!empty($user->goal_logs)): ?>
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
            <?php foreach ($user->goal_logs as $goalLogs): ?>
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
    <div class="related">
        <h4><?= __('Related Goals') ?></h4>
        <?php if (!empty($user->goals)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Goal') ?></th>
                <th scope="col"><?= __('Memo') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
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
            <?php foreach ($user->goals as $goals): ?>
            <tr>
                <td><?= h($goals->id) ?></td>
                <td><?= h($goals->goal) ?></td>
                <td><?= h($goals->memo) ?></td>
                <td><?= h($goals->user_id) ?></td>
                <td><?= h($goals->trial) ?></td>
                <td><?= h($goals->running) ?></td>
                <td><?= h($goals->order) ?></td>
                <td><?= h($goals->cycle_time) ?></td>
                <td><?= h($goals->cancell_penalty_money) ?></td>
                <td><?= h($goals->failure_penalty_money) ?></td>
                <td><?= h($goals->end_time) ?></td>
                <td><?= h($goals->next_time) ?></td>
                <td><?= h($goals->success_model_image_url) ?></td>
                <td><?= h($goals->created) ?></td>
                <td><?= h($goals->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Goals', 'action' => 'view', $goals->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Goals', 'action' => 'edit', $goals->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Goals', 'action' => 'delete', $goals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $goals->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
