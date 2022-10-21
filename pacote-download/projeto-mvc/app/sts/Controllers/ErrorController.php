<?php

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class ErrorController
{
    private array $data;

    public function error($code = NULL)
    {
        switch ($code) {

            case 404:
                $loadView = new \Core\ConfigView("adms/Views/alerta/error-404", $this->data);
                $loadView->renderAll();
                break;

            default:
                $loadView = new \Core\ConfigView("sts/Views/error/error-default");
                $loadView->renderAll();
                break;
        }
    }
}
