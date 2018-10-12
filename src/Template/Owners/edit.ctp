<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Owner $owner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $owner->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $owner->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Owners'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Profils'), ['controller' => 'Profils', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profil'), ['controller' => 'Profils', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="owners form large-9 medium-8 columns content">
    <?= $this->Form->create($owner) ?>
    <fieldset>
        <legend><?= __('Edit Owner') ?></legend>
        <?php
            echo $this->Form->control('profil_id', ['options' => $profils]);
            echo $this->Form->control('account_id', ['options' => $accounts]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
