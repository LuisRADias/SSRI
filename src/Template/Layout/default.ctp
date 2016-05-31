<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Moscamed Brasil';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('menustyles.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
   <div id='cssmenu' >
        <ul>
           <li><?= $this->Html->link(__('HOME'), ['controller' => 'pages','action' => 'index']) ?></li>
           <li class='active has-sub'><?= $this->Html->link(__('Montagem'), ['controller' => 'montagem','action' => 'index']) ?>
              <ul>
                 <li class='has-sub'><?= $this->Html->link(__('Montagem'), ['controller' => 'montagem','action' => 'index']) ?>
                    <ul>
                       <li>
                            <?= $this->Html->link(__('Inserir'), ['controller' => 'montagem','action' => 'add']) ?>
                       </li>
                       <li class='last'>
                            <?= $this->Html->link(__('Listar'), ['controller' => 'montagem','action' => 'index']) ?>
                        </li>
                    </ul>
                 </li>
                 <li class='has-sub'><?= $this->Html->link(__('Lote Bandejas'), ['controller' => 'lotebandejas','action' => 'index']) ?>
                    <ul>
                       <li>
                            <?= $this->Html->link(__('Inserir'), ['controller' => 'lotebandejas','action' => 'add']) ?>
                       </li>
                       <li class='last'>
                            <?= $this->Html->link(__('Listar'), ['controller' => 'lotebandejas','action' => 'index']) ?>
                        </li>
                    </ul>
                 </li>
                 <li class='has-sub'><?= $this->Html->link(__('Bequer'), ['controller' => 'bequer','action' => 'index']) ?>
                    <ul>
                       <li>
                            <?= $this->Html->link(__('Inserir'), ['controller' => 'bequer','action' => 'add']) ?>
                       </li>
                       <li class='last'>
                            <?= $this->Html->link(__('Listar'), ['controller' => 'bequer','action' => 'index']) ?>
                        </li>
                    </ul>
                 </li>
              </ul>
           </li>
           <li class='active has-sub'><?= $this->Html->link(__('Lote de Gaiolas'), ['controller' => 'lotegaiolas','action' => 'index']) ?>
              <ul>
                   <li>
                        <?= $this->Html->link(__('Inserir'), ['controller' => 'lotegaiolas','action' => 'add_dependant']) ?>
                   </li>
                   <li class='last'>
                        <?= $this->Html->link(__('Listar'), ['controller' => 'lotegaiolas','action' => 'index']) ?>
                    </li>
                </ul>
           </li>
           <li class='active has-sub'><?= $this->Html->link(__('Separações'), ['controller' => 'separacoes','action' => 'index']) ?>
              <ul>
                 <li>
                      <?= $this->Html->link(__('Inserir'), ['controller' => 'separacoes','action' => 'add']) ?>
                 </li>
                 <li class='last'>
                      <?= $this->Html->link(__('Listar'), ['controller' => 'separacoes','action' => 'index']) ?>
                  </li>
              </ul>
           </li>
           <li class='active has-sub'><?= $this->Html->link(__('Transporte'), ['controller' => 'lotetransporte','action' => 'index']) ?>
                <ul>
                    <li class='has-sub'><?= $this->Html->link(__('Lote transporte'), ['controller' => 'lotetransporte','action' => 'index']) ?>
                        <ul>
                           <li>
                                <?= $this->Html->link(__('Inserir'), ['controller' => 'lotetransporte','action' => 'add_inicio']) ?>
                           </li>
                           <li class='last'>
                                <?= $this->Html->link(__('Listar'), ['controller' => 'lotetransporte','action' => 'index']) ?>
                            </li>
                        </ul>
                    </li>
                    <li class='has-sub'><?= $this->Html->link(__('Temperatura e transporte'), ['controller' => 'temperaturatransporte','action' => 'index']) ?>
                        <ul>
                           <li>
                                <?= $this->Html->link(__('Inserir'), ['controller' => 'temperaturatransporte','action' => 'add']) ?>
                           </li>
                           <li class='last'>
                                <?= $this->Html->link(__('Listar'), ['controller' => 'temperaturatransporte','action' => 'index']) ?>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
           <li class='active has-sub'><?= $this->Html->link(__('Liberação'), ['controller' => 'liberacao','action' => 'index']) ?>
              <ul>
                <li class='has-sub'><?= $this->Html->link(__('Liberação'), ['controller' => 'liberacao','action' => 'index']) ?>
                    <ul>
                        <li>
                            <?= $this->Html->link(__('Inserir'), ['controller' => 'liberacao','action' => 'add']) ?>
                        </li>
                        <li class='last'>
                            <?= $this->Html->link(__('Listar'), ['controller' => 'liberacao','action' => 'index']) ?>
                        </li>
                    </ul>
                </li>
                <li class='has-sub'><?= $this->Html->link(__('Bairro'), ['controller' => 'bairro','action' => 'index']) ?>
                    <ul>
                        <li>
                            <?= $this->Html->link(__('Inserir'), ['controller' => 'bairro','action' => 'add']) ?>
                        </li>
                        <li class='last'>
                            <?= $this->Html->link(__('Listar'), ['controller' => 'bairro','action' => 'index']) ?>
                        </li>
                    </ul>
                </li>
              </ul>
           </li>
           <li class='active has-sub'><?= $this->Html->link(__('Ovitrampas'), ['controller' => 'ovitrampa','action' => 'index']) ?>
              <ul>
                 <li>
                      <?= $this->Html->link(__('Inserir'), ['controller' => 'ovitrampa','action' => 'add']) ?>
                 </li>
                 <li class='last'>
                      <?= $this->Html->link(__('Listar'), ['controller' => 'ovitrampa','action' => 'index']) ?>
                  </li>
              </ul>
           </li>
           <li class='last'>
                <?= $this->Html->link(__('Sobre'), ['controller' => 'pages','action' => 'sobre']) ?>
           </li>
           <li class='logout'>
                <?= $this->Html->link(__('Sair'), ['controller' => 'loginmoscamed','action' => 'logout']) ?>
           </li>
        </ul>
    </div>
    <div id="container">
        <div id="content">
            <?= $this->Flash->render() ?>
            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <footer>
        </footer>
    </div>
</body>
</html>
