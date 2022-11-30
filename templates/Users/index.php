<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="page-content header-text">
                <div class="users index content">
                <div class="heading-section">
                     <h4>Gestión de Usuarios</h4>
                </div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th><?= $this->Paginator->sort('id') ?></th>
                                    <th><?= $this->Paginator->sort('email') ?></th>
                                    <th><?= $this->Paginator->sort('username') ?></th>
                                    <th><?= $this->Paginator->sort('rol') ?></th>
                                    <th><?= $this->Paginator->sort('created') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                        <td><?= $this->Number->format($user->id) ?></td>
                                        <td><?= h($user->email) ?></td>
                                        <td><?= h($user->username) ?></td>
                                        <td><?= h($user->rol) ?></td>
                                        <td><?= h($user->created) ?></td>
                                        <td class="actions">
                                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                                            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
        
                    <?= $this->Html->link(__('Añadir Usuario'), ['action' => 'register'], ['class' => 'button float-right']) ?>
                </div>
            </div>
        </div>
    </div>
</div>