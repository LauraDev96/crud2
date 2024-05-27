<?php
include "header.php";
?>

<div class="container-alta">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Alta de producto
                </div>
                <div class="row-md">
                    <div class="col-md">
                        <div class="card-header-md">
                            Ingresar datos: 
                        </div>
                        <form class="p-4" mehod="post" action="registro.php">
                        <div class="mb-3">
                                    <label for="" class="form-label">Identificador</label>
                                    <input type="number" class="form-control" name="identificador" id="identificador" autofocus required />  
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" required />  
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Descripción</label>
                                    <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>  
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Precio</label>
                                    <input type="number" class="form-control" name="precio" id="precio" required />  
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Imagen</label>
                                    <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*" required />  
                                </div>
                                <div class="d-grid">
                                    <input type="submit" class="btn btn-primary" value="Dar de alta">
                                </div>
                        </form>
                    </div>
                </div>
                <a href="index.php"><i class="bi-arrow-return-left"></i></a>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>