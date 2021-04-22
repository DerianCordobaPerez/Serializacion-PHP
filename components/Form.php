<?php
class Form {
    public static function open_form($file, $method, $enctype): void {
        echo "<form action='$file' method='$method' enctype='$enctype'>";
    }

    public static function close_form(): void {
        echo "</form>";
    }
}