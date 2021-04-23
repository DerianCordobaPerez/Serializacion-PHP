<?php
class Label {
    private function __construct() {}

    /**
     * Componente label
     * @param string $for
     * @param string $title
     * @return void
     */
    public static function label_void(string $for, string $title): void {
        echo "<label for='$for'>$title</label>";
    }
}