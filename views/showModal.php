<?php
    /**
     * Ventana modal donde se abrira el formulario de edicion
     * @param none
     * @return void
     */
    function edit_modal($student): void {
        echo "
                <div class='modal fade' id='editModal' data-bs-backdrop='static' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog modal-dialog-scrollable'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='exampleModalLabel'>Editar usuario</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>";
        show_form('update.php', $student);
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
