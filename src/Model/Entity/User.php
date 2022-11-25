<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $password
 * @property string $email
 * @property string $username
 * @property string $rol
 * @property \Cake\I18n\FrozenDate $created
 *
 * @property \App\Model\Entity\Comentsgame $comentsgame
 * @property \App\Model\Entity\Comentsnews $comentsnews
 * @property \App\Model\Entity\Game[] $games
 */
class User extends Entity
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
        'password' => true,
        'email' => true,
        'username' => true,
        'rol' => true,
        'created' => true,
        'comentsgame' => true,
        'comentsnews' => true,
        'games' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
