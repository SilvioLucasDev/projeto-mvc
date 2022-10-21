<?php
    //ALTERAR INFORMAÇÕES "#" DE ACORDO COM SEU PROJETO

    // DEFINE URL's
    define('URL', 'http://localhost/projeto-mvc/');
    define('URLASSETS', 'http://localhost/projeto-mvc/app/assets/');

    define('CONTROLLER', 'LoginController');
    define('METHOD', 'index');

    // ERRRO
    define('ERRORCONTROLLER', 'ErrorController');
    define('ERRORMETHOD', 'error');

    // CREDENCIAIS BANCO
    define('DB', '#');         // # = TIPO DE BANCO
    define('HOST', '#');       // # =  HOST DB
    define('DBPORT', '#');     // # =  PORTA DB (INT OR STRING)
    define('DBNAME', '#');     // # =  NOME DB
    define('USER', '#');       // # =  USUÁRIO DB
    define('PASS', '#');       // # =  SENHA DB

    // EXIBIR ERROS PHP
    ini_set("display_errors", 1);
    ini_set("display_startup_erros", 1);
    error_reporting(E_ALL);

    // DESCRIÇÃO DE ABREVIATURA PARA CÓDIGOS DE ERRO
    // "C" - Erros de configuração padrão -> Conexão DB, ConfigView etc...
    // "S" - Erros de páginas dinâmicas -> Formulário = Campo errado, formato errado etc..
