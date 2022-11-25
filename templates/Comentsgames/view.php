<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comentsgame $comentsgame
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Comentsgame'), ['action' => 'edit', $comentsgame->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Comentsgame'), ['action' => 'delete', $comentsgame->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comentsgame->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Comentsgames'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Comentsgame'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="comentsgames view content">
            <h3><?= h($comentsgame->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Game') ?></th>
                    <td><?= $comentsgame->has('game') ? $this->Html->link($comentsgame->game->name, ['controller' => 'Games', 'action' => 'view', $comentsgame->game->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $comentsgame->has('user') ? $this->Html->link($comentsgame->user->id, ['controller' => 'Users', 'action' => 'view', $comentsgame->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($comentsgame->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Content') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($comentsgame->content)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
