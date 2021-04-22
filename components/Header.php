<?php
class Header {
    private function __construct() {}
    public static function header(mixed $content, $with_strong = false): void {
        include_once 'Divs.php';
        include_once 'P.php';
        Divs::open_div('header');
            if(is_array($content))
                foreach($content as $item)
                    P::p('text-center title', $item, $with_strong);
            else P::p('text-center title', $content, $with_strong);
        Divs::close_div();
    }
}