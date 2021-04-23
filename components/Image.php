<?php
class Image {
    private function __construct() {}

    /**
     * Componente img
     * @param string $src
     * @param string $class
     * @return void
     */
    public static function image(string $src, string $class): void {
        echo "<img src='$src' class='$class' alt='Imagen de perfil' />";
    }
}