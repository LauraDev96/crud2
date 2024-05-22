<?php
include "header.php";
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Acciones sobre la Base de Datos
                </div>
                <div class="container-table">
                    <div class="table-responsive">

                        <table class="table-primary">
                            <thead>
                                <tr>
                                    <th>Alta de libros</th>
                                    <th>Baja de libros</th>
                                    <th>Editar libros</th>
                                    <th>Listado de libros</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><a href="alta.php"><i class="bi-database-add"></i></a></td>
                                    <td><a href="baja.php"><i class="bi-database-dash"></i></a></td>
                                    <td><a href="edita.php"><i class="bi-database-check"></i></a></td>
                                    <td><a href="listado.php"><i class="bi-database-down"></i></a></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>