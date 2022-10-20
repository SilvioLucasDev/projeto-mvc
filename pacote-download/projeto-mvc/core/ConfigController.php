<?php

namespace Core;

class ConfigController
{
    private string $url;
    private array  $urlAll; //URLCONJUNTO
    private string $urlController;
    private string $urlMethod;
    private string $urlParameter;
    private string $class;

    public function __construct()
    {
        //VERIFICA SE A URL ESTÁ SETADA
        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
            //PEGA OS PARÂMETROS DA URL
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            $this->urlAll = explode("/", $this->url);

            //VERIFICA SE O USUÁRIO SETOU A CONTROLLER, MÉTODO E/OU PARÂMETRO
            if (isset($this->urlAll[0]) && isset($this->urlAll[1])) {
                $this->urlController = ucwords($this->urlAll[0]);
                $this->urlMethod = $this->urlAll[1];
                $this->urlParameter = isset($this->urlAll[2]) ? $this->urlAll[2] : "";
            } else {
                $this->urlController = CONTROLLER;
                $this->urlMethod = METHOD;
                $this->urlParameter = "";
            }
        } else {

            $this->urlController = CONTROLLER;
            $this->urlMethod = METHOD;
            $this->urlParameter = "";
        }

        // var_dump($this->urlAll[2]);
        // echo "URL: {$this->url} <br>";
        // echo "Controller: {$this->urlController} <br>";
        // echo "Metodo: {$this->urlMethod} <br>";
    }

    public function loadPage()
    {
        $this->class = "\\Sts\\Controllers\\" . $this->urlController;

        if (class_exists($this->class)) {
            $this->loadMethod();

        } else {
            $this->urlController = CONTROLLER;
            $this->urlMethod = METHOD;
            $this->loadPage();
        }
    }

    public function loadMethod()
    {
        $loadClass = new $this->class();

        if (method_exists($loadClass, $this->urlMethod)) {

            if ($this->urlParameter != "") {
                $loadClass->{$this->urlMethod}($this->urlParameter);
            } else {
                $loadClass->{$this->urlMethod}();
            }
        } else {
            $this->urlController = CONTROLLER;
            $this->urlMethod = METHOD;
            $this->loadPage();
        }
    }
}
