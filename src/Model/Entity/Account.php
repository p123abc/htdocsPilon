<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Account Entity
 *
 * @property int $id
 * @property int $primary_owner
 * @property int $balance
 * @property int $type
 *
 * @property \App\Model\Entity\Owner[] $owners
 * @property \App\Model\Entity\Transaction[] $transactions
 */
class Account extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'primary_owner' => true,
        'balance' => true,
        'type' => true,
        'owners' => true,
        'transactions' => true
    ];
}
