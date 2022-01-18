<?php
class Input {
    private function __construct() {}

    /**
     * Componente input
     * @param string $class
     * @param string $title_span
     * @param string $type
     * @param string $name
     * @param string $placeholder
     * @param string $value
     * @param bool $exist_span
     * @param string $license
     * @param string $values
     * @return void
     */
    public static function input(string $class, string $title_span, string $type, string $name, string $placeholder, string $value = '', $exist_span = true, string $license = "", string $values = ""): void {
        Divs::open_div('input-group');
            if($exist_span) Span::span('input-group-text', $title_span);
            echo "<input class='$class' type='$type' name='$name' ";
            if($type == 'number' || $type == 'text') echo $values;
            if($name == 'license' && $license !== "") echo "readonly";
            echo " placeholder='$placeholder' value='$value' required />";
        Divs::close_div();
    }

    /**
     * Componente input string
     * @param string $class
     * @param string $type
     * @param string $name
     * @param string $value
     * @return string
     */
    public static function input_string(string $class, string $type, string $name, string $value = ''): string {
        return "<input class='$class' type='$type' name='$name' value='$value' required />";
    }

    /**
     * Componente input hidden
     * @param string $name
     * @param string $value
     * @retun void
     */
    public static function input_hidden(string $name, string $value): void {
        echo "<input type='hidden' name='$name' value='$value'/>";
    }
}