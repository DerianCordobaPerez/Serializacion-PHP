<?php
    function window_modal(): void {
        echo "
            <div class='modal fade' id='editModal' data-bs-backdrop='static' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-scrollable'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title' id='exampleModalLabel'>Editar usuario</h5>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>";
                            show_form('update.php');

        echo "
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }
    window_modal();
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
                    <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#editModal'>Editar</button>
                    <button type='button' class='btn btn-danger' data-bs-toggle='modal'data-bs-target='#deleteModal'>Eliminar</button>
                </div>
            ";
            echo "
                    </div>
                <hr />
            ";
        }
    }
?>