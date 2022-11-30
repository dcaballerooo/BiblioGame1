<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comentsnews $comentsnews
 * @var string[]|\Cake\Collection\CollectionInterface $news
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content header-text">
                <div class="row">
                    <div class="column-responsive column-80">
                        <div class="comentsnews form content">
                            <?= $this->Form->create($comentsnews) ?>
                            <fieldset>
                                <legend><?= __('Edita tu comentario') ?></legend>
                                <?php
                                echo $this->Form->control('content');
                                echo $this->Form->control('new_id', ['options' => $news]);
                                ?>
                            </fieldset>
                            <?= $this->Form->button(__('Guardar')) ?>
                            <?= $this->Form->end() ?>
                        </div>
                        <aside class="column">
                        <div class="side-nav">
                            <?= $this->Form->postLink(
                                __('Eliminar comentario'),
                                ['action' => 'delete', $comentsnews->id],
                                ['confirm' => __('¿Seguro que quiere eliminar el comentario # {0}?', $comentsnews->id), 'class' => 'side-nav-item']
                            ) ?><br>
                            <?= $this->Html->link(__('Volver a los comentarios sobre noticias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                        </div>
                    </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>