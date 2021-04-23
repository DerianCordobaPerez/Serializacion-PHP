<?php
class Title {
    private function __construct(){}

    /**
     * Componente title
     * @param string $size
     * @param string $title
     * @param string $class
     * @return string
     */
    public static function title(string $size, string $title, string $class = ""): string {
        return "<$size class='$class'>$title</$size>";
    }

    /**
     * Componente title void
     * @param string $size
     * @param string $title
     * @param string $class
     * @return void
     */
    public static function title_void(string $size, string $title, string $class = ""): void {
        echo "<$size class='$class'>$title</$size>";
    }

    /**
     * Componente title strong
     * @param string $size
     * @param string $title
     * @param string $class
     * @return string
     */
    public static function title_with_strong(string $size, string $title, string $class = ""): string {
        return "<$size class='$class'><strong>$title</strong></$size>";
    }

    /**
     * Componente title void
     * @param string $size
     * @param string $title
     * @param string $class
     * @return void
     */
    public static function title_with_strong_void(string $size, string $title, string $class = ""): void {
        echo "<$size class='$class'><strong>$title</strong></$size>";
    }
}