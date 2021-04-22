<?php
class Span {
    public static function span(string $class, string $title, string $id = ''): void {
        echo "<span class='$class' id='$id'><strong>$title</strong></span>";
    }
}