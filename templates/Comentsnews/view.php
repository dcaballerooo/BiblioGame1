<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comentsnews $comentsnews
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Comentsnews'), ['action' => 'edit', $comentsnews->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Comentsnews'), ['action' => 'delete', $comentsnews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comentsnews->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Comentsnews'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Comentsnews'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="comentsnews view content">
            <h3><?= h($comentsnews->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('News') ?></th>
                    <td><?= $comentsnews->has('news') ? $this->Html->link($comentsnews->news->title, ['controller' => 'News', 'action' => 'view', $comentsnews->news->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $comentsnews->has('user') ? $this->Html->link($comentsnews->user->id, ['controller' => 'Users', 'action' => 'view', $comentsnews->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($comentsnews->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Content') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($comentsnews->content)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
