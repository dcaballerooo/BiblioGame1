<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var string[]|\Cake\Collection\CollectionInterface $games
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="page-content header-text">
                <div class="row">
                    <div class="column-responsive column-80">
                        <div class="users form content">
                            <?= $this->Form->create($user) ?>
                            <fieldset>
                                <legend><?= __('Edita el Usuario') ?></legend>
                                <?php
                                echo $this->Form->control('password');
                                echo $this->Form->control('email');
                                echo $this->Form->control('username');
                                echo $this->Form->control('rol',['options'=> ['usuario'=>'usuario','premium'=>'premium','sin-limites'=>'sin-limites','admin'=>'admin']]);
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