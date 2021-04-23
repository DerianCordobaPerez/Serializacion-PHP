<?php
class Form {
    private function __construct() {}

    /**
     * Inicio del componente form
     * @param $file
     * @param $method
     * @param $enctype
     * @return void
     */
    public static function open_form($file, $method, $enctype): void {
        echo "<form action='$file' method='$method' enctype='$enctype'>";
    }

    /**
     * Fin del componente form
     * @param null
     * @return void
     */
    public static function close_form(): void {
        echo "</form>";
    }
}