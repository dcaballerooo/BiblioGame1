<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comentsgame $comentsgame
 * @var string[]|\Cake\Collection\CollectionInterface $games
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $comentsgame->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $comentsgame->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Comentsgames'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="comentsgames form content">
            <?= $this->Form->create($comentsgame) ?>
            <fieldset>
                <legend><?= __('Edit Comentsgame') ?></legend>
                <?php
                    echo $this->Form->control('content');
                    echo $this->Form->control('game_id', ['options' => $games]);
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
