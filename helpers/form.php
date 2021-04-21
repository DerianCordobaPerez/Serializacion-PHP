<?php
    /**
     * Esquema del formulario que usaremos para el registro y edicion de los usuarios
     * @param string $file
     * @return void
     */
    function show_form($file): void {
        echo "
            <h3><strong>Alumnos</strong></h3>
            <h5>Rellene el formulario con los datos de estudiante</h5>
            <form action='$file' method='post' enctype='multipart/form-data'>
                <div class='form-group'>
                    <label for='email'><strong>Email</strong></label>
                    <input type='email' name='email' class='form-control' placeholder='Email' required />
                </div>

                <div class='form-group'>
                    <label for='email'><strong>Nombre</strong></label>
                    <input type='text' name='name' class='form-control' placeholder='Nombre' maxlength='200' required />
                </div>

                <div class='form-group'>
                    <label for='email'><strong>Carnet</strong></label>
                    <input type='text' name='license' class='form-control' placeholder='Carnet' maxlength='10' required />
                </div>

                <div class='form-group'>
                    <label for='email'><strong>Edad</strong></label>
                    <input type='number' name='age' class='form-control' placeholder='Edad' min='15' max='50' required />
                </div>

                <div class='form-group'>
                    <label for='email'><strong>Curso actual</strong></label>
                    <input type='number' name='course' class='form-control' placeholder='Curso actual' min='1' max='5' required>
                </div>

                <div class='form-group'>
                    <label for='email'><strong>Imagen</strong></label>
                    <input type='file' name='photo' class='form-control' required>
                </div>

                <div class='form-group'>
                    <div class='d-grid gap-2'>
                        <input type='submit' value='Enviar' class='btn btn-primary my-2' />
                    </div>
                </div>
            </form>
        ";
    }
