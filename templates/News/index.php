<?php

/**
 * @var \App\View\AppView $this
 */
$this->loadHelper('Authentication.Identity');
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="page-content header-text">
            <?php if ($this->Identity->get('rol') == 'admin') {
                echo $this->Html->link(__('Nueva Noticia'), ['action' => 'add'], ['class' => 'button float-right']); 
            }?><br>

                <!-- ***** Featured Games Start ***** -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="featured-games header-text">
                            <div class="heading-section">
                                <h4><em></em> Noticias</h4>
                            </div>
                            <div class="owl-features owl-carousel">


                                <?php foreach ($news as $news) : ?>
                                    <div class="item">
                                        <div class="thumb">
                                            <?= $this->Html->image('/webroot/img/' . $news->cover, ['alt' => 'CakePHP']); ?>
                                            <div class="hover-effect">
                                                <h6><?= $this->Html->link(__('Saber Más'), ['action' => 'view', $news->id]) ?></h6>
                                            </div>
                                        </div>
                                        <h4><?= h($news->title) ?></h4>
                                        
                                    </div>
                                <?php endforeach; ?>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Featured Games End ***** -->

            </div>
        </div>
    </div>
</div>