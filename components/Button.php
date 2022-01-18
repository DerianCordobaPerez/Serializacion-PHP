<?php
class Button {
    private function __construct() {}

    /**
     * Componente button generalizado
     * @param string $class
     * @param string $id
     * @param string $title
     * @param string $type
     * @return string
     */
    public static function button(string $class, string $id, string $title, string $type = "button"): string {
        return "<button type='$type' class='$class' id='$id'>$title</button>";
    }

    /**
     * Componente button con extras
     * @param string $class
     * @param string $id
     * @param string $title
     * @param string $target
     * @param string $type
     * @return string
     */
    public static function button_collapse(string $class, string $id, string $title, string $target, string $type = "button"): string {
        return "<button type='$type' class='$class' id='$id' data-bs-toggle='collapse' data-bs-target='#$target' aria-expanded='true' aria-controls='$target'>$title</button>";
    }
}