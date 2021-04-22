<?php
class Button {
    public static function button(string $class, string $id, string $title, string $type = "button"): string {
        return "<button type='$type' class='$class' id='$id'>$title</button>";
    }
}