<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-content">

        <!-- ***** Banner Start ***** -->
        <div class="main-banner">
          <div class="row">
            <div class="col-lg-7">
              <div class="header-text">
                <h6>¡Bienvenidos a BIBLIOGAME!</h6>
                <h4><em>DESCARGA</em> TUS JUEGOS FAVORITOS AQUI</h4>
                <div class="main-button">
                  <?php echo $this->Html->link('Descarga Ya!', ['controller' => 'Games', 'action' => 'index']) ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ***** Banner End ***** -->

        <!-- ***** Most Popular Start ***** -->
        <div class="most-popular">
          <div class="row">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Más populares</em> Ahora Mismo</h4>
              </div>
              <div class="row">
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <?php echo $this->Html->image('game-01.jpg') ?>
                    <h4>Fortnite<br><span>Battle-Royale</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <?php echo $this->Html->image('game-02.jpg') ?>
                    <h4>PubG<br><span>Battle-Royale</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.5</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <?php echo $this->Html->image('game-03.jpg') ?>
                    <h4>Dota2<br><span>MOBA</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.3</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <?php echo $this->Html->image('game-04.jpg') ?>
                    <h4>CS-GO<br><span>Shooter</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.7</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="item">
                    <div class="row">
                      <div class="col-lg-6 col-sm-6">
                        <div class="item inner-item">
                          <?php echo $this->Html->image('game-05.jpg') ?>
                          <h4>Minecraft<br><span>SandBox</span></h4>
                          <ul>
                            <li><i class="fa fa-star"></i> 4.9</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <div class="item">
                          <?php echo $this->Html->image('game-06.jpg') ?>
                          <h4>W.A.W.2<br><span>Shooter</span></h4>
                          <ul>
                            <li><i class="fa fa-star"></i> 4.4</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <?php echo $this->Html->image('game-02.jpg') ?>
                    <h4>League of Legends<br><span>MOBA</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.7</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <?php echo $this->Html->image('game-05.jpg') ?>
                    <h4>World of Warcraft<br><span>MMO-RPG</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.6</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="main-button">
                    <?php echo $this->Html->link('Descubre Más', ['controller' => 'Games', 'action' => 'index']) ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ***** Most Popular End ***** -->

        <div class="most-popular">
          <div class="row">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Noticias</em></h4>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-6">
                  <div class="item">
                    <?php echo $this->Html->image('new-05.jpg') ?>
                    <h4>Un nuevo mundo se abre; Metaverso<br><span>Realidad Virtual</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <div class="item">
                    <?php echo $this->Html->image('new-06.jpg') ?>
                    <h4>Abre Bibliogame, el nuevo portal de Juegos<br><span>Programación</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="main-button">
                    <?php echo $this->Html->link('Informarme Más', ['controller' => 'News', 'action' => 'index']) ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>