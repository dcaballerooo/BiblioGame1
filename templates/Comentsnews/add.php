<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comentsnews $comentsnews
 * @var \Cake\Collection\CollectionInterface|string[] $news
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Comentsnews'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="comentsnews form content">
            <?= $this->Form->create($comentsnews) ?>
            <fieldset>
                <legend><?= __('Add Comentsnews') ?></legend>
                <?php
                    echo $this->Form->control('content');
                    echo $this->Form->control('new_id', ['options' => $news]);
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
