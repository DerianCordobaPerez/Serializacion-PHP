<?php
class Student {
    public function __construct(
        public $email = "", public $name = "", public $license = "", public $age = "", public $course = "", public $photo = ""
    ) {}

    function __destruct() {}

    /**
     * Devuelve el nombre de la imagen del usuario
     * @param none
     * @return string
     */
    public function getPhoto(): string
    {
        return $this->photo;
    }

    function get_data(): array {
        return array($this->name, $this->email, $this->age, $this->license, $this->course, $this->photo, '\n');
    }
}