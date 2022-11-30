<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game $game
 * @var \Cake\Collection\CollectionInterface|string[] $users
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
                            <div class="heading-section">
                                    <h4>Añade un nuevo juego</h4>
                                </div>
                                <?php
                                echo $this->Form->control('name');
                                echo $this->Form->control('gender');
                                echo $this->Form->control('sub_type');
                                echo $this->Form->control('description');
                                echo $this->Form->control('cover');
                                echo $this->Form->control('url');
                                ?>
                            </fieldset><br>
                            <?= $this->Form->button(__('Crear')) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>