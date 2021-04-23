<?php
class Input {
    private function __construct() {}

    public static function input($class, $title_span, $type, $name, $placeholder, $value = '', $exist_span = true, string $license = ""): void {
        Divs::open_div('input-group');
            if($exist_span) Span::span('input-group-text', $title_span);
            echo "<input class='$class' type='$type' name='$name' ";
            if($name === 'license' && $license !== "") echo "readonly";
            echo " placeholder='$placeholder' value='$value' required />";
        Divs::close_div();
    }

    public static function input_string($class, $type, $name, $value = ''): string {
        return "<input class='$class' type='$type' name='$name' value='$value' required />";
    }

    public static function input_hidden($name, $value): void {
        echo "<input type='hidden' name='$name' value='$value'/>";
    }
}