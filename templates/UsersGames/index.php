<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\UsersGame> $usersGames
 */
?>
<div class="usersGames index content">
    <?= $this->Html->link(__('New Users Game'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users Games') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('game_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usersGames as $usersGame): ?>
                <tr>
                    <td><?= $usersGame->has('user') ? $this->Html->link($usersGame->user->id, ['controller' => 'Users', 'action' => 'view', $usersGame->user->id]) : '' ?></td>
                    <td><?= $usersGame->has('game') ? $this->Html->link($usersGame->game->name, ['controller' => 'Games', 'action' => 'view', $usersGame->game->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usersGame->user_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersGame->user_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersGame->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersGame->user_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
