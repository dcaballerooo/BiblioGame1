<?php
$this->loadHelper('Authentication.Identity');
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comentsnews $comentsnews
 * @var \Cake\Collection\CollectionInterface|string[] $news
 * @var \Cake\Collection\CollectionInterface|string[] $users
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
                                <legend><?= __('Complete los campos sobre su comentario') ?></legend>
                                <?php
                                echo $this->Form->control('content');
                                echo $this->Form->control('new_id', ['options' => $news]);
                                ?>
                            </fieldset>
                            <div class="side-nav">
                                <?= $this->Html->link(__('Volver a los comentarios sobre noticias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
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