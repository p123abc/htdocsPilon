<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profil[]|\Cake\Collection\CollectionInterface $profils
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Profil'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profils index large-9 medium-8 columns content">
    <h3><?= __('Profils') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('postalcode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profils as $profil): ?>
            <tr>
                <td><?= $this->Number->format($profil->id) ?></td>
                <td><?= $profil->has('user') ? $this->Html->link($profil->user->id, ['controller' => 'Users', 'action' => 'view', $profil->user->id]) : '' ?></td>
                <td><?= h($profil->name) ?></td>
                <td><?= h($profil->firstname) ?></td>
                <td><?= h($profil->address) ?></td>
                <td><?= h($profil->phone) ?></td>
                <td><?= h($profil->postalcode) ?></td>
                <td><?= h($profil->email) ?></td>
                <td><?= h($profil->photo) ?></td>
                <td><?= h($profil->created) ?></td>
                <td><?= h($profil->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $profil->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profil->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profil->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
