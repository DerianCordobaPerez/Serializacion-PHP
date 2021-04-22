<?php
class Student {
    private static array|null $arrayStudent = array();

    /**
     * Constructor Student
     * @param string $email
     * @param string $name
     * @param string $license
     * @param string $age
     * @param string $course
     * @param string $photo
     */
    public function __construct(
        public $email = "", public $name = "", public $license = "", public $age = "", public $course = "", public $photo = ""
    ) {}

    /**
     * Destructor Student
     */
    function __destruct() {}

    /**
     * Devuelve un array con los atributos de la clase
     * @param none
     * @return array
     */
    public function get_data(): array {
        return array($this->name, $this->email, $this->age, $this->license, $this->course, $this->photo, '\n');
    }

    /**
     * Devuelve el array del estudiante seleccionado
     * @param none
     * @return array
     */
    public function get_array_student(): array {
        return self::$arrayStudent;
    }

    /**
     * Establece el array del estudiante seleccionado
     * @param array $student
     * @return void
     */
    public function set_array_student(array $student): void {
        self::$arrayStudent = $student;
    }

    public function edit_student(): void {
        include 'views/showModal.php';
        show_form('upload.php', $this);
    }
}