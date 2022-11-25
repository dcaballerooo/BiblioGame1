<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game $game
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Games'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="games form content">
            <?= $this->Form->create($game) ?>
            <fieldset>
                <legend><?= __('Add Game') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('sub_type');
                    echo $this->Form->control('description');
                    echo $this->Form->control('cover');
                    echo $this->Form->control('url');
                    echo $this->Form->control('users._ids', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
