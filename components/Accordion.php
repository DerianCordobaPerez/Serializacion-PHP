<?php
class Accordion
{
    private function __construct() {}

    /**
     * Inicio del componente acordeon generalizado
     * @param string $title
     * @param string $id
     * @param string $target
     * @return void
     */
    public static function open_accordion(string $title, string $id, string $target): void
    {
        include_once 'Divs.php';
        Divs::open_div('accordion', 'accordionExample');
            Divs::open_div('accordion-item');
                echo "
                    <h2 class='accordion-header' id='$id'>
                        <button class='accordion-button' type='button' data-bs-toggle='collapse' data-bs-target='#$target' aria-expanded='true' aria-controls='$target'>
                            $title
                        </button>
                    </h2>
                    <div id='$target' class='accordion-collapse collapse' aria-labelledby='$id' data-bs-parent='#accordionExample'>
                        <div class='accordion-body'>";
    }

    /**
     * Final del componente acordeon
     * @param null
     * @return void
     */
    public static function close_accordion(): void {
        include_once 'Divs.php';
                    Divs::close_div();
                Divs::close_div();
            Divs::close_div();
        Divs::close_div();
    }
}