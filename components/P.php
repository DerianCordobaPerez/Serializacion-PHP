<?php
class P {
    private function __construct() {}

    public static function p(string $class, string $content, $with_string = false): void {
        echo "<p class='$class'>";
        echo $with_string ? "<strong>$content</strong>" : $content;
        echo"</p>";
    }
}