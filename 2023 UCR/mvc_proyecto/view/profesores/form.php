<div class="mb-3" hidden>
    <label for="" class="form-label">Id</label>
    <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="" value="<?php echo isset($this->datos->id) ? $this->datos->id : ""; ?>">
</div>
<div class="mb-3">
    <label for="" class="form-label">Cédula</label>
    <input required type="text" class="form-control" name="cedula" id="cedula" aria-describedby="helpId" placeholder="Ingrese la cédula del profesor" value="<?php echo isset($this->datos->cedula) ? $this->datos->cedula : ""; ?>">
</div>
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input required type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese el nombre del profesor" value="<?php echo isset($this->datos->nombre) ? $this->datos->nombre : ""; ?>">
</div>
<div class="mb-3">
    <label for="" class="form-label">Apellido paterno</label>
    <input required type="text" class="form-control" name="apellidopaterno" id="apellidopaterno" aria-describedby="helpId" placeholder="Ingrese el apellido paterno" value="<?php echo isset($this->datos->apellidopaterno) ? $this->datos->apellidopaterno : ""; ?>">
</div>
<div class="mb-3">
    <label for="" class="form-label">Apellido materno</label>
    <input required type="text" class="form-control" name="apellidomaterno" id="apellidomaterno" aria-describedby="helpId" placeholder="Ingrese el apellido materno" value="<?php echo isset($this->datos->apellidomaterno) ? $this->datos->apellidomaterno : ""; ?>">
</div>
<div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input required type="email" class="form-control" name="correoelectronico" id="correoelectronico" aria-describedby="helpId" placeholder="Ingrese el correo Electronico" value="<?php echo isset($this->datos->correoelectronico) ? $this->datos->correoelectronico : ""; ?>">
</div>
<div class="mb-3">
    <label for="" class="form-label">Teléfono</label>
    <input required type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Ingrese el telefono" value="<?php echo isset($this->datos->telefono) ? $this->datos->telefono : ""; ?>">
</div>
<div class="mb-3">
    <label for="" class="form-label">Teléfono Celular</label>
    <input type="text" class="form-control" name="telefonocelular" id="telefonocelular" aria-describedby="helpId" placeholder="Ingrese el telefono celular" value="<?php echo isset($this->datos->telefonocelular) ? $this->datos->telefonocelular : ""; ?>">
</div>
<div class="mb-3">
    <label for="" class="form-label">Fecha Nacimiento</label>
    <input required type="date" class="form-control" name="fechanacimiento" id="fechanacimiento" aria-describedby="helpId" placeholder="Ingrese la fecha de nacimiento" value="<?php echo isset($this->datos->fechanacimiento) ? $this->datos->fechanacimiento : ""; ?>">
</div>
<div class="mb-3">
    <label for="" class="form-label">Sexo</label>
    <input required type="text" class="form-control" name="sexo" id="sexo" aria-describedby="helpId" placeholder="Ingrese el sexo" value="<?php echo isset($this->datos->sexo) ? $this->datos->sexo : ""; ?>">
</div>
<div class="mb-3">
    <label for="" class="form-label">Dirección</label>
    <input required type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="Ingrese la dirección " value="<?php echo isset($this->datos->direccion) ? $this->datos->direccion : ""; ?>">
</div>
<div class="mb-3">
    <label for="" class="form-label">Nacionalidad</label>
    <input required type="text" class="form-control" name="nacionalidad" id="nacionalidad" aria-describedby="helpId" placeholder="Ingrese la Nacionalidad" value="<?php echo isset($this->datos->nacionalidad) ? $this->datos->nacionalidad : ""; ?>">
</div>

<div class="mb-3">
    <label for="" class="form-label">Carrera</label>
    <select required class="form-select" name="idcarreras" id="idcarreras">
        <option value="" selected disabled>Elija la carrera asignada al profesor
        </option>
        <?php
        foreach ($this->grupos as $fila) {
            $grupos = new classGrupos();
            $grupos = $fila;
            if ($grupos->id == $this->datos->idcarreras) { 
                echo '<option value="' . $grupos->id . '" selected>' . $grupos->nombre . '</option>';
            } else {
                echo '<option value= ' . $grupos->id . '> ' . $grupos->nombre . ' </option>;';
            }           
            
        }
        ?>
    </select>
</div>

<div class="mb-3">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>