<div class="mb-3" hidden>
      <label for="" class="form-label">Id</label>
      <input type="text" 
        class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="" 
        value="<?php echo isset($this->datos->id)? $this->datos->id :"";?>">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Nombre</label>
      <input type="text" required
        class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese el nombre de curso"
        value="<?php echo isset($this->datos->nombre)? $this->datos->nombre :"";?>">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input type="text" required
          class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Ingrese la descripcion del curso"
          value="<?php echo isset($this->datos->descripcion)? $this->datos->descripcion :"";?>">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Tiempo</label>
        <input type="text" required
          class="form-control" name="tiempo" id="tiempo" aria-describedby="helpId" placeholder="Ingrese el Tiempo del curso"
          value="<?php echo isset($this->datos->tiempo)? $this->datos->tiempo :"";?>">
      </div>
      <div class="mb-3">
            <button type="submit" class="btn btn-primary">Salvar</button>
      </div>