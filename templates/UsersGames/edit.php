<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersGame $usersGame
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $games
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersGame->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersGame->user_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users Games'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersGames form content">
            <?= $this->Form->create($usersGame) ?>
            <fieldset>
                <legend><?= __('Edit Users Game') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
