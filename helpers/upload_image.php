<?php
    include_once 'constants/constants.php';

    function validation_image(): bool {
        $upload = true;

        if(isset($_POST['submit'])) {
            $value = getimagesize($_FILES['photo']['tmp_name']);
            if(!$value) $upload = false;
        }

        if(file_exists(NAME_FILE)) {
            echo 'Error, la imagen ingresada ya existe';
            $upload = false;
        }
        return $upload;
    }
