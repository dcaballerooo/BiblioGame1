<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comentsnews Entity
 *
 * @property int $id
 * @property string $content
 * @property int $new_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\News $news
 * @property \App\Model\Entity\User $user
 */
class Comentsnews extends Entity
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
        'content' => true,
        'new_id' => true,
        'user_id' => true,
        'news' => true,
        'user' => true,
    ];
}
