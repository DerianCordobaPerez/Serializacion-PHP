<?php
class Html {
    private function __construct() {}

    // Atributos iniciales del cuerpo del html
    private static array $links = array(
        '<meta charset="UTF-8">',
        '<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">',
        '<meta http-equiv="X-UA-Compatible" content="ie=edge">',
        '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">',
        '<link rel="preconnect" href="https://fonts.gstatic.com">',
        '<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">',
        '<link rel="stylesheet" href="public/css/index.css">',
    );

    // Atributos finales del body
    private static array $scripts = array(
        '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>',
        '<script src="https://kit.fontawesome.com/0496ae07d8.js" crossorigin="anonymous"></script>',
    );

    /**
     * Inicio del componente html
     * @param string $title
     * @return void
     */
    public static function open_html(string $title): void {
        echo "
            <!doctype html>
            <html lang='en'>
            <head>
        ";
        foreach (self::$links as $link)
            echo $link;
        echo "
            <title>$title</title>
            </head>
            <body>
        ";
    }

    /**
     * Fin del componente html
     * @param null
     * @return void
     */
    public static function close_html(): void {
        foreach(self::$scripts as $script)
            echo $script;
        echo "
                </body>
            </html>
        ";
    }
}