<div class="mb-3" hidden>
  <label for="" class="form-label">Id</label>
  <input type="text"
    class="form-control" name="id" id="id" aria-describedby="helpId" placeholder=""
    value="<?php echo isset($this->datos->id)? $this->datos->id :"";?>">
  <small id="helpId" class="form-text text-muted"></small>
</div>
<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text"
    class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese el nombre del grupo"
    value="<?php echo isset($this->datos->nombre)? $this->datos->nombre :"";?>">
  <small id="helpId" class="form-text text-muted">Ingrese el nombre del grupo</small>
</div>
<div class="mb-3">
            <button type="submit" class="btn btn-primary">Salvar</button>
      </div>