<div class="modal" tabindex="-1" id="ModalLibroInsert">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Presiona para insertar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./validaciones/insertar.php" method="POST" class="d-flex">
        
            <div>
             <label for="id"  class="form-label">ID</label>
             <div>
                 <input type="text" class="form-control" name="id-lib" id="id-lib"
                 placeholder="Ingresa el id">
                </div>
            </div> 

            <div>

              <label for="titulo"  class="form-label"></label>
              <div>
                 <input type="text" class="form-control" name="id-lib" id="id-lib"
                 placeholder="Ingresa el titulo del libro">
                </div>
            </div>  

            <div>
              <label for="autor"  class="form-label"></label>
              <div>
                <input type="text" class="form-control" name="id-lib" id="id-lib"
                placeholder="Ingresa el autor">
              </div>
            </div>  

            <div>

              <label for="descripcion"  class="form-label"></label>
              <div>
                <input type="text" class="form-control" name="id-lib" id="id-lib"
                 placeholder="Caracteristica breve">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Guardar</button>
            </div>  
        </form>
      </div>
     
    </div>
  </div>
</div>