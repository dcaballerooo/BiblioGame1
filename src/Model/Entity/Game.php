<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Game Entity
 *
 * @property int $id
 * @property string $name
 * @property string $gender
 * @property string $sub_type
 * @property string $description
 * @property string $cover
 * @property string $url
 *
 * @property \App\Model\Entity\Comentsgame $comentsgame
 * @property \App\Model\Entity\User[] $users
 */
class Game extends Entity
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
        'name' => true,
        'gender' => true,
        'sub_type' => true,
        'description' => true,
        'cover' => true,
        'url' => true,
        'comentsgame' => true,
        'users' => true,
    ];
}
