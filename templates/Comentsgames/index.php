<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Comentsgame> $comentsgames
 */
?>
<div class="comentsgames index content">
    <?= $this->Html->link(__('New Comentsgame'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Comentsgames') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('game_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comentsgames as $comentsgame): ?>
                <tr>
                    <td><?= $this->Number->format($comentsgame->id) ?></td>
                    <td><?= $comentsgame->has('game') ? $this->Html->link($comentsgame->game->name, ['controller' => 'Games', 'action' => 'view', $comentsgame->game->id]) : '' ?></td>
                    <td><?= $comentsgame->has('user') ? $this->Html->link($comentsgame->user->id, ['controller' => 'Users', 'action' => 'view', $comentsgame->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $comentsgame->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comentsgame->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comentsgame->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comentsgame->id)]) ?>
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
