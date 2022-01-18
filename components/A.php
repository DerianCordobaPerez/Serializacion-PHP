<?php
class A {
    private function __construct() {}

    /**
     * Componente a generalizado
     * @param string $class
     * @param string $link
     * @param string $title
     * @return void
     */
    public static function a(string $class, string $link, string $title): void {
        echo "<a class='$class' href='$link'>$title</a>";
    }
}