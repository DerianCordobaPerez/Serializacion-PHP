<?php
class A {
    private function __construct() {}

    public static function a(string $class, string $link, string $title): void {
        echo "<a class='$class' href='$link'>$title</a>";
    }
}