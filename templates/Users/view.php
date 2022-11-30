<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$this->loadHelper('Authentication.Identity');
?>
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
            <!-- ***** Banner Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="main-profile ">
                <div class="row">
                  <div class="col-lg-4">
                  <?php echo $this->Html->image('profile.jpg')
                  ?>
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                      <h4><?= h($user->username) ?></h4>
                      <span>Online</span><br>
                      <span><?=$this->Html->link('Salir', [
                                                'controller' => 'users',
                                                'action' => 'logout'
                                            ]);
                                            ?></span><br>
                       <?php if ($this->Identity->get('rol') == 'admin') {?> 
                          <span><?=$this->Html->link('Gestionar Usuarios', [
                                                'controller' => 'users',
                                                'action' => 'index'
                                            ]);?></span>
                        <?php }?>
                  </div>
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <ul>
                      <li>Juegos añadidos <span>3</span></li>
                      <li>Rol <span><?= h($user->rol) ?></span></li>
                      <li>E-mail <span><?= h($user->email) ?></span></li>
                      <li>Se unió el <span><?= h($user->created) ?></span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->
        </div>
      </div>
    </div>
  </div>
</div>
   
