<?php
class Student {

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
}