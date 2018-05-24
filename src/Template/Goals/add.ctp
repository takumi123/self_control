<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Goal $goal
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Goals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Goal Logs'), ['controller' => 'GoalLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Goal Log'), ['controller' => 'GoalLogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="goals form large-9 medium-8 columns content">
    <?= $this->Form->create($goal) ?>
    <fieldset>
        <legend><?= __('Add Goal') ?></legend>
        <?php
            echo $this->Form->control('goal');
            echo $this->Form->control('memo');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('trial');
            echo $this->Form->control('running');
            echo $this->Form->control('order');
            echo $this->Form->control('cycle_time');
            echo $this->Form->control('cancell_penalty_money');
            echo $this->Form->control('failure_penalty_money');
            echo $this->Form->control('end_time');
            echo $this->Form->control('next_time');
            echo $this->Form->control('success_model_image_url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
