<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comentsnews $comentsnews
 * @var string[]|\Cake\Collection\CollectionInterface $news
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $comentsnews->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $comentsnews->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Comentsnews'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="comentsnews form content">
            <?= $this->Form->create($comentsnews) ?>
            <fieldset>
                <legend><?= __('Edit Comentsnews') ?></legend>
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
