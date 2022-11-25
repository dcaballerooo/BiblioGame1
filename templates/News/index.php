<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\News> $news
 */
?>
<div class="news index content">
    <?= $this->Html->link(__('New News'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('News') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('cover') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($news as $news): ?>
                <tr>
                    <td><?= $this->Number->format($news->id) ?></td>
                    <td><?= h($news->title) ?></td>
                    <td><?= h($news->cover) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $news->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $news->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $news->id], ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]) ?>
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
