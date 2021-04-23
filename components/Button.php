<?php
class Button {
    private function __construct() {}

    public static function button(string $class, string $id, string $title, string $type = "button"): string {
        return "<button type='$type' class='$class' id='$id'>$title</button>";
    }

    public static function button_collapse(string $class, string $id, string $title, string $target, string $type = "button"): string {
        return "<button type='$type' class='$class' id='$id' data-bs-toggle='collapse' data-bs-target='#$target' aria-expanded='true' aria-controls='$target'>$title</button>";
    }
}