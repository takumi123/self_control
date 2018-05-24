<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Action $action
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $action->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $action->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Actions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Goals'), ['controller' => 'Goals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Goal'), ['controller' => 'Goals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Action Logs'), ['controller' => 'ActionLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Action Log'), ['controller' => 'ActionLogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actions form large-9 medium-8 columns content">
    <?= $this->Form->create($action) ?>
    <fieldset>
        <legend><?= __('Edit Action') ?></legend>
        <?php
            echo $this->Form->control('action');
            echo $this->Form->control('memo');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('goal_id', ['options' => $goals]);
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
