<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UsersGame Entity
 *
 * @property int $user_id
 * @property int $game_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Game $game
 */
class UsersGame extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'user' => true,
        'game' => true,
    ];
}
