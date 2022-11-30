<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game $game
 */
$this->loadHelper('Authentication.Identity');
?>




<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content header-text">  

                <!-- ***** Featured Start ***** -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feature-banner header-text">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="thumb">
                                        <?= $this->Html->image('/webroot/img/' . $game->cover, ['alt' => 'CakePHP']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Featured End ***** -->

                <!-- ***** Details Start ***** -->
                <div class="game-details">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2><?= h($game->name) ?></h2>
                        </div>
                        <div class="col-lg-12">
                            <div class="content">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="left-info">
                                            <div class="left">
                                                <h4><?= h($game->name) ?></h4>
                                                <span><?= h($game->gender) ?></span>
                                            </div>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <?= $this->Text->autoParagraph(h($game->description)); ?>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="main-border-button">
                                            <a href="<?= h($game->url) ?>">Descarga <?= h($game->name) ?> Ya!</a>
                                        </div>
                                        
                                        <div class="main-border-button">
                                            <?php echo $this->Html->link(__('Ver qué opinan otros Usuarios'), ['controller' => 'Comentsgames', 'action' => 'index']) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Details End ***** -->

                <div class="row">
                    <aside class="column">
                        <div class="side-nav">
                        <?php if ($this->Identity->get('rol') == 'admin') {
                            echo $this->Html->link(__('Editar Juego'), ['action' => 'edit', $game->id], ['class' => 'side-nav-item']); 
                            ?>
                            <br>
                            <?php echo $this->Form->postLink(__('Eliminar Juego'), ['action' => 'delete', $game->id], ['confirm' => __('Seguro que quieres eliminar el juego # {0}?', $game->name), 'class' => 'side-nav-item']); 
                            }?>
                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </div>
</div>