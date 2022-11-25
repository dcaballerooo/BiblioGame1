<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comentsgame $comentsgame
 * @var \Cake\Collection\CollectionInterface|string[] $games
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Comentsgames'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="comentsgames form content">
            <?= $this->Form->create($comentsgame) ?>
            <fieldset>
                <legend><?= __('Add Comentsgame') ?></legend>
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
