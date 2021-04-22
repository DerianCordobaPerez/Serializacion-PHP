<?php
class Title {
    private function __construct(){}

    public static function title(string $size, string $title, string $class = ""): string {
        return "<$size class='$class'>$title</$size>";
    }

    public static function title_void(string $size, string $title, string $class = ""): void {
        echo "<$size class='$class'>$title</$size>";
    }

    public static function title_with_strong(string $size, string $title, string $class = ""): string {
        return "<$size class='$class'><strong>$title</strong></$size>";
    }

    public static function title_with_strong_void(string $size, string $title, string $class = ""): void {
        echo "<$size class='$class'><strong>$title</strong></$size>";
    }
}