<?php
    function serialize_content($students): bool {
        include_once 'constants/constants.php';
        try {
            file_put_contents(FILE_SERIALIZE, serialize($students));
            return true;
        } catch (Exception $exception) {
            echo $exception;
            return false;
        }
    }

    function unserialize_content(): array {
        include_once 'constants/constants.php';
        try {
            $students = unserialize(file_get_contents(FILE_SERIALIZE));
            if(!is_array($students)) $students = array();
        } catch (Exception $exception) {
            echo $exception;
            $students = array();
        }
        return $students;
    }