<?php
class Divs {
    public static function open_div(string $class, string $id = ''): void {
        echo "<div class='$class' id='$id'>";
    }

    public static function close_div(): void {
        echo "</div>";
    }

    public static function open_div_role(string $class, string $role): void {
        echo "<div class='$class' role='$role'>";
    }
}