<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
    <label for="Nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ isset($materium->Nombre) ? $materium->Nombre : ''}}" >
    {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Carrera') ? 'has-error' : ''}}">
    <label for="Carrera" class="control-label">{{ 'Carrera' }}</label>
    <input class="form-control" name="Carrera" type="text" id="Carrera" value="{{ isset($materium->Carrera) ? $materium->Carrera : ''}}" >
    {!! $errors->first('Carrera', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
