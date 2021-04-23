<?php
class Image {
    private function __construct() {}
    public static function image(string $src, string $class): void {
        echo "<img src='$src' class='$class' alt='Imagen de perfil' />";
    }
}