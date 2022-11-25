<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersGame $usersGame
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Users Game'), ['action' => 'edit', $usersGame->user_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Users Game'), ['action' => 'delete', $usersGame->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersGame->user_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users Games'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Users Game'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersGames view content">
            <h3><?= h($usersGame->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $usersGame->has('user') ? $this->Html->link($usersGame->user->id, ['controller' => 'Users', 'action' => 'view', $usersGame->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Game') ?></th>
                    <td><?= $usersGame->has('game') ? $this->Html->link($usersGame->game->name, ['controller' => 'Games', 'action' => 'view', $usersGame->game->id]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
