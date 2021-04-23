<?php

    /**
     * Serializacion y escritura del fichero
     * @param $students
     * @return bool
     */
    function serialize_content($students): bool {
        try {
            file_put_contents('student_serialize.store', serialize($students));
            return true;
        } catch (Exception $exception) {
            echo $exception;
            return false;
        }
    }

    /**
     * Deserializacion del fichero
     * @param null
     * @return array
     */
    function unserialize_content(): array {
        $students = null;
        try {
             $students = unserialize(file_get_contents('student_serialize.store'));
            if(!is_array($students)) $students = array();
        } catch (Exception $exception) {
            echo $exception;
            $students = array();
        }
        return $students;
    }