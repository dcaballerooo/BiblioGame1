<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Comentsgame> $comentsgames
 */
$this->loadHelper('Authentication.Identity');
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content header-text">
                <div class="comentsgames index content">
                <div class="heading-section">
                                    <h4>Comentarios sobre los juegos</h4>
                                </div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th><?= $this->Paginator->sort('Juego') ?></th>
                                    <th><?= $this->Paginator->sort('Comentario') ?></th>
                                    <th><?= $this->Paginator->sort('Autor') ?></th>
                                    <th class="actions"><?= __('Acciones Disponibles') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($comentsgames as $comentsgame) : ?>
                                    <tr>
                                        <td><?= $comentsgame->has('game') ? $this->Html->link($comentsgame->game->name, ['controller' => 'News', $comentsgame->game->id]) : '' ?></td>
                                        <td><?= $comentsgame->has('content') ? $this->Html->link($comentsgame->content, ['controller' => 'Games', $comentsgame->content]) : '' ?></td>
                                        <td><?= $comentsgame->has('user') ? $this->Html->link($comentsgame->user->username, ['controller' => 'Users', $comentsgame->username]) : '' ?></td>

                                        <?php if ($this->Identity->get('id') == $comentsgame->user->id || $this->Identity->get('rol') == 'admin') { ?>
                                            <td>
                                                <?php
                                                echo $this->Html->link(__('Edit'), ['action' => 'edit', $comentsgame->id]);
                                                echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $comentsgame->id], ['confirm' => __('Seguro que quieres eliminar el comentario # {0}?', $comentsgame->id)]); ?>
                                            </td>
                                        <?php
                                        } ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?= $this->Html->link(__('Añade un comentario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>