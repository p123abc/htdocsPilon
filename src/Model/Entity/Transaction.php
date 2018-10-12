<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property int $account_id
 * @property string $name
 * @property float $amount
 * @property \Cake\I18n\FrozenTime $date
 *
 * @property \App\Model\Entity\Account $account
 */
class Transaction extends Entity
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
        'account_id' => true,
        'name' => true,
        'amount' => true,
        'date' => true,
        'account' => true
    ];
}
