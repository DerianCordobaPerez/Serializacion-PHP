<?php
class P {
    private function __construct() {}

    public static function p(string $class, string $content, $with_strong = false): void {
        echo "<p class='$class'>";
        echo $with_strong ? "<strong>$content</strong>" : $content;
        echo"</p>";
    }
}