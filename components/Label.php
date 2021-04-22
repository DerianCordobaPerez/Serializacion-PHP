<?php
class Label {
    public static function label_void($for, $title): void {
        echo "<label for='$for'>$title</label>";
    }
}