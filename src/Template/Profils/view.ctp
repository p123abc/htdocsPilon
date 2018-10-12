<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profil $profil
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profil'), ['action' => 'edit', $profil->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profil'), ['action' => 'delete', $profil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profil->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Profils'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profil'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profils view large-9 medium-8 columns content">
    <h3><?= h($profil->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $profil->has('user') ? $this->Html->link($profil->user->id, ['controller' => 'Users', 'action' => 'view', $profil->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($profil->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($profil->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($profil->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($profil->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postalcode') ?></th>
            <td><?= h($profil->postalcode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($profil->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($profil->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($profil->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($profil->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($profil->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Owners') ?></h4>
        <?php if (!empty($profil->owners)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Profil Id') ?></th>
                <th scope="col"><?= __('Account Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($profil->owners as $owners): ?>
            <tr>
                <td><?= h($owners->id) ?></td>
                <td><?= h($owners->profil_id) ?></td>
                <td><?= h($owners->account_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Owners', 'action' => 'view', $owners->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Owners', 'action' => 'edit', $owners->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Owners', 'action' => 'delete', $owners->id], ['confirm' => __('Are you sure you want to delete # {0}?', $owners->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
