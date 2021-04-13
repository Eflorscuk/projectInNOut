<?php
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

//Constantes de path de arquivos
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));

//Páginas que precisam ser carregadas
require_once(realpath(dirname(__FILE__) . '/database.php'));