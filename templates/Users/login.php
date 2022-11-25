<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

            <div class="users form">
                <?= $this->Flash->render() ?>
                <div class="heading-section">
                     <h4>Login</h4>
                </div>
                    <?= $this->Form->create() ?>
            <fieldset>
                    <?= $this->Form->control('email', ['required' => true]) ?>
                    <?= $this->Form->control('password', ['required' => true]) ?>
            </fieldset><br>                                                                                           
            <div class="main-button">
                    <?= $this->Form->submit(__('Login')); ?>
                    <?= $this->Form->end() ?>
            </div><br>
            <div class="main-button">
                    <?= $this->Html->link("Registrate", ['action' => 'register']) ?>
            </div>
            </div>

        </div>
      </div>
    </div>
  </div>