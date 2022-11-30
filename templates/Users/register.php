<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $games
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="page-content header-text">
                <div class="heading-section">
                    <h4>Regístrate</h4>
                </div>
                <div class="column-responsive column-80">
                    <div class="users form content">
                        <?= $this->Form->create($user) ?>
                        <fieldset>
                            <?php
                            echo $this->Form->control('email');
                            echo $this->Form->control('password');
                            echo $this->Form->control('username');
                            echo $this->Form->control('rol',['options'=> ['usuario'=>'usuario','premium'=>'premium','sin-limites'=>'sin-limites']]);
                            ?>
                        </fieldset>
                        <?= $this->Form->button(__('Listo')) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>