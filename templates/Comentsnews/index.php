<?php

/**
 * @var \App\View\AppView $this
 * 
 */
$this->loadHelper('Authentication.Identity');
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content header-text">
                <div class="comentsnews index content">
                <div class="heading-section">
                                    <h4>Comentarios sobre las noticias</h4>
                                </div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th><?= $this->Paginator->sort('Noticia') ?></th>
                                    <th><?= $this->Paginator->sort('Comentario') ?></th>
                                    <th><?= $this->Paginator->sort('Autor') ?></th>
                                    <th class="actions"><?= __('Acciones Disponibles') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($comentsnews as $comentsnews) : ?>
                                    <tr>
                                        <td><?= $comentsnews->has('news') ? $this->Html->link($comentsnews->news->title, ['controller' => 'News', 'action' => 'view', $comentsnews->news->id]) : '' ?></td>
                                        <td><?= $comentsnews->has('content') ? $this->Html->link($comentsnews->content, ['controller' => 'Comentsnews', 'action' => 'view', $comentsnews->content]) : '' ?></td>
                                        <td><?= $comentsnews->has('user') ? $this->Html->link($comentsnews->user->username, ['controller' => 'Users', 'action' => 'view', $comentsnews->user->username]) : '' ?></td>

                                        <?php if ($this->Identity->get('id') == $comentsnews->user->id || $this->Identity->get('rol') == 'admin') { ?>
                                            <td>
                                            <?php 
                                            echo $this->Html->link(__('Editar'), ['action' => 'edit', $comentsnews->id]); 
                                            echo $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $comentsnews->id], ['confirm' => __('Seguro que quieres eliminar el comentario # {0}?', $comentsnews->id)]); ?>
                                            </td>
                                        <?php
                                            }?>
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