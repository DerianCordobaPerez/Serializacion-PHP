<?php
class Span {
    private function __construct() {}

    /**
     * Componente span
     * @param string $class
     * @param string $title
     * @param string $id
     * @return void
     */
    public static function span(string $class, string $title, string $id = ''): void {
        echo "<span class='$class' id='$id'><strong>$title</strong></span>";
    }
}