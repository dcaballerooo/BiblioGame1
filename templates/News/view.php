<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
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
                        <div class="feature-banner">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?= $this->Html->image('/webroot/img/' . $news->cover, ['alt' => 'CakePHP']); ?>
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
                            <h2><?= h($news->title) ?></h2>
                        </div>
                        <div class="col-lg-12">
                            <div class="content">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="left-info">
                                            <div class="left">
                                                <h4><?= h($news->title) ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <?= $this->Text->autoParagraph(h($news->content)); ?>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="main-border-button">
                                        <?php echo $this->Html->link(__('Ver qué opinan otros Usuarios'), ['controller' => 'Comentsnews', 'action' => 'index']) ?>
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
                                echo $this->Html->link(__('Editar Noticia'), ['action' => 'edit', $news->id], ['class' => 'side-nav-item']);
                            ?>
                                <br>
                            <?php
                                echo $this->Form->postLink(__('Eliminar Noticia'), ['action' => 'delete', $news->id], ['confirm' => __('¿Seguro que quieres eliminar la noticia # {0}?', $news->name), 'class' => 'side-nav-item']);
                            } ?>


                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>