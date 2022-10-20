<?php

if (!defined('URL')) {
    header("Location: /");
    exit();
}

if (isset($_SESSION['error'])) { ?>

    <?php
    echo"
            <p>" . $_SESSION['error']['msg'] . "</p>

            <a href='". URL ."". $_SESSION['error']['redirect'] ."'>
                " . $_SESSION['error']['button'] . " 
            </a>
        ";
    ?>


    <img src="<?php echo URLASSETS ?>img/" width="180" height="130" />

    <p><?php echo $_SESSION['error']['acao'] ?>!</p>




<?php
    if ($_SESSION['error']['destroy_session'] == 'S') {
        session_destroy();
    }

    unset($_SESSION['error']);

} else {
    header("location: " . URL . "error/error/404");
}
?>