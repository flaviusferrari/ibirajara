<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define('_SYSEXEC', 1);

// Configura a timezone padrão a ser utilizada por todas as funções de data e hora em um script 
date_default_timezone_set('America/Sao_Paulo');

// Somente em produção
//ini_set('display_errors', 'Off');

/*
 *  Define as constantes de inicializaçao
 */
define('CONTROLLERS', 'app/controllers/');
define('VIEWS', 'app/views/');
define('MODELS', 'app/models');
define('HELPERS', 'system/helpers');
define('WIDGET', 'system/widget/');
define('DATABASE', 'system/database/');
define('BASEPATH', __DIR__);
define('DIR', '/ibirajara/');
define('MODULES', 'app/modules/');

require_once 'system/system.php';
require_once 'system/controller.php';
require_once 'system/model.php';
require_once 'system/loader.php';
require_once 'system/view.php';

// Carrega as classes do sistema
spl_autoload_register(array('TLoader', 'loader'));



// Inicia a aplicaçao
$start = new System;
// Verifica se o usuario esta logado
//$start->getLogado();
$start->run();


