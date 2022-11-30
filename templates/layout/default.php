<?php

$this->loadHelper('Authentication.Identity');
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Bibliogame';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <title>
        <?= $cakeDescription ?>
        <?= $this->fetch('title') ?>
    </title>


    <?= $this->Html->css(['bootstrap.min', 'animate', 'flex-slider', 'fontawesome', 'owl', 'style', 'swiper-bundle.min']) ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!-- Google Font -->
    <?= $this->Html->meta([
        'link' => 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap',
        'rel' => 'stylesheet'
    ]);
    ?>

    <?= $this->Html->meta([
        'link' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.css',
        'rel' => 'stylesheet'
    ]);
    ?>


</head>

<body>
    <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">

                    <!-- ***** Logo Start ***** -->
                    <?php echo $this->Html->image('logo1.png', ['alt' => 'logotype','width'=>'60px', 'url' => ['controller' => 'Pages', 'action'  => 'index']]); ?>
                    <!-- ***** Logo End ***** -->

                    <!-- ***** Search Start ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Buscar un juego" id='searchText' name="searchKeyword" onkeypress="handle" />
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->


                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                    <li><?php echo $this->Html->link('Inicio', ['controller' => 'Pages', 'action' => 'index']) ?></li>
                        <li><?php echo $this->Html->link('Noticias', ['controller' => 'News', 'action' => 'index']) ?></li>
                        <li><?php echo $this->Html->link('Juegos', ['controller' => 'Games', 'action' => 'index']) ?></li>
                          <li>
                               <?php
                                 if($this->Identity->isLoggedIn()){
                                     echo $this->Html->link($this->Identity->get('username'), ['controller' => 'Users', 'action' => 'view',$this->Identity->get('id')]);

                                 }else{
                                     echo $this->Html->link('Login', [
                                                     'controller' => 'users',
                                                         'action' => 'login'
                                         ]);
                                 }?>   
                        </li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->


                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

  <!-- ***** Footer Area Start ***** -->
 <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 <a href="#">Bibliogame.</a> Todos los derechos reservados.
        </div>
      </div>
    </div>
 </footer>
   <!-- ***** Footer Area End ***** -->

   <!-- Scripts -->
   <?= $this->Html->script(['jquery.min', 'bootstrap.min', 'isotope.min', 'owl-carousel', 'tabs',  'popup', 'custom']) ?>

</body>

</html>

