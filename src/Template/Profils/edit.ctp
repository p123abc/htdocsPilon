<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profil $profil
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $profil->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $profil->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Profils'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profils form large-9 medium-8 columns content">
    <?= $this->Form->create($profil) ?>
    <fieldset>
        <legend><?= __('Edit Profil') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('name');
            echo $this->Form->control('firstname');
            echo $this->Form->control('address');
            echo $this->Form->control('phone');
            echo $this->Form->control('postalcode');
            echo $this->Form->control('email');
            echo $this->Form->control('photo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
