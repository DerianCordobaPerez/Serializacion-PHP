<?php
    use JetBrains\PhpStorm\NoReturn;
    /**
     * Redireccion al inicio
     * @param null
     * @return void
     */
    #[NoReturn] function redirect(): void {
        sleep(3);
        header("Location: https://".$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['PHP_SELF']), '/\\')."/");
        exit;
    }
