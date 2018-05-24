<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Action Logs'), ['controller' => 'ActionLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Action Log'), ['controller' => 'ActionLogs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Goal Logs'), ['controller' => 'GoalLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Goal Log'), ['controller' => 'GoalLogs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Goals'), ['controller' => 'Goals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Goal'), ['controller' => 'Goals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('email');
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('display_cycle_time');
            echo $this->Form->control('activate');
            echo $this->Form->control('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
