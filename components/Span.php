<?php
class Span {
    private function __construct() {}

    public static function span(string $class, string $title, string $id = ''): void {
        echo "<span class='$class' id='$id'><strong>$title</strong></span>";
    }
}