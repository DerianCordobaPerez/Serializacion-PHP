<?php
class Divs {
    public static function open_div(string $class, string $id = ''): void {
        echo "<div class='$class' id='$id'>";
    }

    public static function close_div(): void {
        echo "</div>";
    }
}