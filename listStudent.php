<?php
    function list_students(): void {
        $titles = array('Nombre', 'Email', 'Edad', 'Carnet', 'Curso');
        $students = explode('\n', file_get_contents('StudentSerialize.txt'));
        echo "
                                <div class='row'>
                                    <div class='col-md-4'>
                                        <h3 class='text-center'>Imagen</h3>
                                    </div>
                                    <div class='col-md-4'>
                                        <h3>Informacion</h3>
                                    </div>
                                    <div class='col-md-4'>
                                        <h3>Acciones</h3>
                                    </div>
                                </div>
                                <hr />
        ";
        for($i = 0; $i < count($students) - 1; $i++) {
            $attributes = explode(',', $students[$i]);
            echo "
                                    <div class='row'>
                                        <div class='col-md-4'>
                                            <div class='image-shadow'>
                                                <img class='rounded mx-auto d-block image' src='uploads/$attributes[5]' />
                                            </div>
                                        </div>
                                        <div class='col-md-4'>
                                ";
            for ($j = 0; $j < count($attributes) - 2; $j++)
                echo "<p><strong>$titles[$j]: </strong> $attributes[$j]</p>";
            echo "</div>";

            echo "
                                    <div class='col-md-4'>
                                        <button type='button' class='btn btn-warning'>Editar</button>
                                        <button type='button' class='btn btn-danger'>Eliminar</button>
                                ";
            echo "
                        </div>
                    </div>
                <hr />
            ";
        }
    }