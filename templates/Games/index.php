<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Game> $games
 */

use function PHPSTORM_META\type;

$this->loadHelper('Authentication.Identity');
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content header-text">
                <?php if ($this->Identity->get('rol') == 'admin') {
                    echo $this->Html->link(__('Nuevo Juego'), ['action' => 'add'], ['class' => 'button float-right']);
                } ?>

                <!-- ***** Para Todos Start ***** -->
                <div class="most-popular">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section">
                                <h4>Para <em>Todos</em></h4>
                            </div>
                            <div class="row">
                                <?php foreach ($games as $game) :
                                    if ($game->sub_type == 'free-to-play') { ?>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="item">
                                                <div class="thumb">
                                                    <?= $this->Html->image('/webroot/img/' . $game->cover, ['alt' => 'CakePHP']); ?>

                                                    <h6><?= $this->Html->link(__('Detalles'), ['action' => 'view', $game->id]) ?></h6>
                                                </div>
                                                <h4><?= h($game->name) ?><br><span><?= h($game->gender) ?></span></h4>
                                                <ul>
                                                    <li><i class="fa fa-star"></i> 4.8</li>
                                                </ul>
                                            </div>
                                        </div>
                                <?php }
                                endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Para todos End ***** -->


                <!-- ***** Para Premium Start ***** -->
                <?php if ($this->Identity->get('rol') == 'premium' || $this->Identity->get('rol') == 'sin-limites' || $this->Identity->get('rol') == 'admin') { ?>
                    <div class="most-popular">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4>Para <em>Premiums</em></h4>
                                </div>
                                <div class="row">
                                    <?php foreach ($games as $game) :
                                        if ($game->sub_type == 'premium') { ?>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="item">
                                                    <?= $this->Html->image('/webroot/img/' . $game->cover, ['alt' => 'CakePHP']); ?>
                                                    <h6><?= $this->Html->link(__('Saber Más'), ['action' => 'view', $game->id]) ?></h6>
                                                    <h4><?= h($game->name) ?><br><span><?= h($game->gender) ?></span></h4>
                                                    <ul>
                                                        <li><i class="fa fa-star"></i> 4.8</li>
                                                    </ul>
                                                </div>
                                            </div>
                                    <?php }
                                    endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- ***** Para Premium End ***** -->

                <!-- ***** Para Sin-Limites Start ***** -->
                <?php if ($this->Identity->get('rol') == 'sin-limites' || $this->Identity->get('rol') == 'admin') { ?>
                    <div class="most-popular">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4>Para <em>Sin-Límites</em></h4>
                                </div>
                                <div class="row">
                                    <?php foreach ($games as $game) :
                                        if ($game->sub_type == 'sin-limites') { ?>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="item">
                                                    <?= $this->Html->image('/webroot/img/' . $game->cover, ['alt' => 'CakePHP']); ?>
                                                    <h6><?= $this->Html->link(__('Saber Más'), ['action' => 'view', $game->id]) ?></h6>
                                                    <h4><?= h($game->name) ?><br><span><?= h($game->gender) ?></span></h4>
                                                    <ul>
                                                        <li><i class="fa fa-star"></i> 4.8</li>
                                                    </ul>
                                                </div>
                                            </div>
                                    <?php }
                                    endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }  ?>
                <!-- ***** Para Sin-Limites End ***** -->

            </div>

        </div>
    </div>
</div>