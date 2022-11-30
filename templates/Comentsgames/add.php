<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comentsgame $comentsgame
 * @var \Cake\Collection\CollectionInterface|string[] $games
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content header-text">
                <div class="row">
                    <div class="column-responsive column-80">
                        <div class="comentsgames form content">
                            <?= $this->Form->create($comentsgame) ?>
                            <fieldset>
                                <legend><?= __('Complete los campos sobre su comentario') ?></legend>
                                <?php
                                echo $this->Form->control('content');
                                echo $this->Form->control('game_id', ['options' => $games]);
                                ?>
                            </fieldset>
                            <div class="side-nav">
                            <?= $this->Html->link(__('Volver a los comentarios sobre juegos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                        </div>
                            <?= $this->Form->button(__('Añadir')) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>