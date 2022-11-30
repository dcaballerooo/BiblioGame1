<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="page-content header-text">
                <div class="row">
                    <div class="column-responsive column-80">
                        <div class="news form content">
                            <?= $this->Form->create($news) ?>
                            <fieldset>
                                <div class="heading-section">
                                    <h4>Añade una nueva noticia</h4>
                                </div>
                                <?php
                                echo $this->Form->control('title');
                                echo $this->Form->control('content');
                                echo $this->Form->control('cover');
                                ?>
                            </fieldset><br> 
                            <?= $this->Form->button(__('Crear')) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>