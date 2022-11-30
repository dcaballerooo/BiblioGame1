<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game $game
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content header-text">
                <div class="row">
                    <div class="column-responsive column-80">
                        <div class="games form content">
                            <?= $this->Form->create($game) ?>
                            <fieldset>
                                <legend><?= __('Edita el Juego') ?></legend>
                                <?php
                                echo $this->Form->control('name');
                                echo $this->Form->control('gender');
                                echo $this->Form->control('sub_type');
                                echo $this->Form->control('description');
                                echo $this->Form->control('cover');
                                echo $this->Form->control('url');
                                ?>
                            </fieldset><br>
                            <?= $this->Form->button(__('Guardar')) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>