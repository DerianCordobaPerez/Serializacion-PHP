<?php

    /**
     * Validacion sobre la subida de la imagen
     * @param null
     * @return bool
     */
    function validation_image(): bool {
        $upload = true;

        if(isset($_POST['submit'])) {
            $value = getimagesize($_FILES['photo']['tmp_name']);
            if(!$value) $upload = false;
        }

        if(file_exists('uploads/'.basename($_FILES['photo']['name']))) {
            echo 'Error, la imagen ingresada ya existe';
            $upload = false;
        }
        return $upload;
    }
