<?php

namespace Core;

class ConfigView
{
    private $name;
    private $data;

    public function __construct($name, array $data = NULL)
    {
        $this->name = (string) $name;
        $this->data = $data;
    }

    // RENDERIZA TODOS OS INCLUDES
    public function renderAll()
    {
        if (file_exists('app/' . $this->name . '.php')) {

            include 'app/sts/Views/include/header.php';
            include 'app/sts/Views/include/navbar.php';
            include 'app/sts/Views/include/menu.php';
            include 'app/' . $this->name . '.php';
            include 'app/sts/Views/include/footer.php';
        } else {
            $this->locationError();
        }
    }

    // NÃO RENDERIZA TODOS OS INCLUDES
    public function renderLogin()
    {
        if (file_exists('app/' . $this->name . '.php')) {

            include 'app/sts/Views/include/header.php';
            include 'app/' . $this->name . '.php';
            include 'app/sts/Views/include/footer.php';
        } else {
            $this->locationError();
        }
    }

    // REDIRECIONA PARA A PÁGINA DE ERRO DEFAULT
    public function locationError()
    {
        $name = explode("/", $this->name);

        $_SESSION['error'] =
            [
                'destroy_session' => 'N',
                'acao' => 'Erro',
                'msg' => 'Erro C200: Falha ao carregar a Página: <br> <h1>' . end($name) . '</h1>',
                'button' => 'Voltar',
                'redirect' => '/home/index'  // CONTROLLER/MÉTODO/PARÂMETRO
            ];

        header("location: " . URL . "alerta/alerta");
        exit;
    }
}
