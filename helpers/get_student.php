<?php
    include_once 'models/Student.php';
    include_once 'serialize_unserialize.php';

    /**
     * Devuelve el estudiante donde el carnet sea identico al buscado
     * @param string $license
     * @return Student|null
     */
    function get_student(string $license): Student|null {
        $students = unserialize_content();
        foreach($students as $student) {
            if($student->license === $license)
                return $student;
        }
        return null;
    }
