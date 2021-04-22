<?php
class Input {
    public static function input($class, $title_span, $type, $name, $placeholder, $value = '', $exist_span = true): void {
        Divs::open_div('input-group');
            if($exist_span) Span::span('input-group-text', $title_span);
            echo "<input class='$class' type='$type' name='$name' placeholder='$placeholder' value='$value' required />";
        Divs::close_div();
    }

    public static function input_hidden($name, $value): void {
        echo "<input type='hidden' name='$name' value='$value'/>";
    }
}