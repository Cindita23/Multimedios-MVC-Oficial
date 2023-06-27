<div class="mb-3" hidden>
    <label for="" class="form-label">Id</label>
    <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="" value="<?php echo isset($this->datos->id) ? $this->datos->id : ""; ?>">
</div>
<div class="mb-3">
    <label for="" class="form-label">Cédula</label>
    <input required type="text" class="form-control" name="cedula" id="cedula" aria-describedby="helpId" placeholder="Ingrese la cédula del estudiante">
</div>
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input required type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese el nombre del estudiante">
</div>
<div class="mb-3">
    <label for="" class="form-label">Apellido paterno</label>
    <input required type="text" class="form-control" name="apellidopaterno" id="apellidopaterno" aria-describedby="helpId" placeholder="Ingrese el apellido paterno">
</div>
<div class="mb-3">
    <label for="" class="form-label">Apellido materno</label>
    <input required type="text" class="form-control" name="apellidomaterno" id="apellidomaterno" aria-describedby="helpId" placeholder="Ingrese el apellido materno">
</div>
<div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input required type="email" class="form-control" name="correoelectronico" id="correoelectronico" aria-describedby="helpId" placeholder="Ingrese el correo Electronico">
</div>
<div class="mb-3">
    <label for="" class="form-label">Teléfono</label>
    <input required type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Ingrese el telefono">
</div>
<div class="mb-3">
    <label for="" class="form-label">Teléfono Celular</label>
    <input type="text" class="form-control" name="telefonocelular" id="telefonocelular" aria-describedby="helpId" placeholder="Ingrese el telefono celular">
</div>
<div class="mb-3">
    <label for="" class="form-label">Fecha Nacimiento</label>
    <input required type="date" class="form-control" name="fechacacimiento" id="fechanacimiento" aria-describedby="helpId" placeholder="Ingrese la fecha de nacimiento">
</div>
<div class="mb-3">
    <label for="" class="form-label">Sexo</label>
    <input required type="text" class="form-control" name="sexo" id="sexo" aria-describedby="helpId" placeholder="Ingrese el sexo">
</div>
<div class="mb-3">
    <label for="" class="form-label">Dirección</label>
    <input required type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="Ingrese la dirección ">
</div>
<div class="mb-3">
    <label for="" class="form-label">Nacionalidad</label>
    <input required type="text" class="form-control" name="nacionalidad" id="nacionalidad" aria-describedby="helpId" placeholder="Ingrese la Nacionalidad">
</div>

<div class="mb-3">
    <label for="" class="form-label">Carrera</label>
    <select required class="form-select" name="carrera" id="carrera">
        <option value="" selected disabled>Elija la carrera asignada al estudiante
        </option>
    </select>
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>