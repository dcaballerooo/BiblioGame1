<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comentsgame $comentsgame
 * @var string[]|\Cake\Collection\CollectionInterface $games
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="page-content header-text">
<div class="row">
    <div class="column-responsive column-80">
        <div class="comentsgames form content">
            <?= $this->Form->create($comentsgame) ?>
            <fieldset>
                <legend><?= __('Edita tu comentario') ?></legend>
                <?php
                    echo $this->Form->control('content');
                    echo $this->Form->control('game_id', ['options' => $games]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
        <aside class="column">
        <div class="side-nav">
            <?= $this->Form->postLink(
                __('Eliminar comentario'),
                ['action' => 'delete', $comentsgame->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $comentsgame->id), 'class' => 'side-nav-item']
            ) ?><br>
            <?= $this->Html->link(__('Volver a los comentarios sobre juegos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    </div>
</div>
</div>
    </div>
</div>
</div>