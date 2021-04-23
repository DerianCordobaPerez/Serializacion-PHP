<?php
class Divs {
    private function __construct() {}

    /**
     * Inicio del componente div
     * @param string $class
     * @param string $id
     * @return void
     */
    public static function open_div(string $class, string $id = ''): void {
        echo "<div class='$class' id='$id'>";
    }

    /**
     * Fin del componente div
     * @param null
     * @return void
     */
    public static function close_div(): void {
        echo "</div>";
    }

    /**
     * Inicio del componente div con roles
     * @param string $class
     * @param string $role
     * @return void
     */
    public static function open_div_role(string $class, string $role): void {
        echo "<div class='$class' role='$role'>";
    }
}