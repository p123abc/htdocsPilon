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
        <li><?= $this->Html->link(__('List Profils'), ['controller' => 'Profils', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profil'), ['controller' => 'Profils', 'action' => 'add']) ?> </li>
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
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($user->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Profils') ?></h4>
        <?php if (!empty($user->profils)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Firstname') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Postalcode') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->profils as $profils): ?>
            <tr>
                <td><?= h($profils->id) ?></td>
                <td><?= h($profils->user_id) ?></td>
                <td><?= h($profils->name) ?></td>
                <td><?= h($profils->firstname) ?></td>
                <td><?= h($profils->address) ?></td>
                <td><?= h($profils->phone) ?></td>
                <td><?= h($profils->postalcode) ?></td>
                <td><?= h($profils->email) ?></td>
                <td><?= h($profils->photo) ?></td>
                <td><?= h($profils->created) ?></td>
                <td><?= h($profils->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Profils', 'action' => 'view', $profils->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Profils', 'action' => 'edit', $profils->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profils', 'action' => 'delete', $profils->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profils->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
