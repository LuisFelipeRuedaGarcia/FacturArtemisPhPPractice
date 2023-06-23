<?php
require_once "../Model/Categoria.php";
$Categoria = new Categoria();
$FetchCategoria = $Categoria->Fetch();

?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="./Insert.php" method="POST">
      <div class="modal-body">
        <label for="IdCategoria">IdCategoria</label>
        <input type="number" id="IdCategoria" name="IdCategoria">

        <label for="Nombre">Nombre</label>
        <input type="number" id="Nombre" name="Nombre">

        <label for="Descripcion">Descripcion</label>
        <input type="number" id="Descripcion" name="Descripcion">

        <label for="Imagen">Imagen</label>
        <input type="number" id="Imagen" name="Imagen">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="Agregar" value="Agregar">
        </form>
      </div>
    </div>
  </div>
</div>