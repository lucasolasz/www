<?php
//dirname() retorna o nome do diretorio em que o arquivo está
define('APP', dirname(dirname(__FILE__)));

define('VIEWS', APP . '/views/');
define('SECOES', VIEWS . 'paginas/secoes/');
define('COMPONENTES', VIEWS . 'components/');

define('URL_WHATSAPP', 'https://api.whatsapp.com/send?phone=5521998063440&text=Ol%C3%A1%2C%20gostaria%20de%20conversar%20com%20um%20atendente.%20');

define('URL', '/');

define('APP_NOME', 'Leauto');

define('APP_VERSAO', '1.0.0');
