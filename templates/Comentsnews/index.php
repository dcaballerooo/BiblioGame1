<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Comentsnews> $comentsnews
 */
?>
<div class="comentsnews index content">
    <?= $this->Html->link(__('New Comentsnews'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Comentsnews') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('new_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comentsnews as $comentsnews): ?>
                <tr>
                    <td><?= $this->Number->format($comentsnews->id) ?></td>
                    <td><?= $comentsnews->has('news') ? $this->Html->link($comentsnews->news->title, ['controller' => 'News', 'action' => 'view', $comentsnews->news->id]) : '' ?></td>
                    <td><?= $comentsnews->has('user') ? $this->Html->link($comentsnews->user->id, ['controller' => 'Users', 'action' => 'view', $comentsnews->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $comentsnews->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comentsnews->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comentsnews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comentsnews->id)]) ?>
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
