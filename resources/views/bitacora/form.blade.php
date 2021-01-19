<div class="form-group {{ $errors->has('Entrada') ? 'has-error' : ''}}">
    <label for="Entrada" class="control-label">{{ 'Entrada' }}</label>
    <input class="form-control" name="Entrada" type="datetime-local" id="Entrada" value="{{ isset($bitacora->Entrada) ? $bitacora->Entrada : ''}}" >
    {!! $errors->first('Entrada', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Salida') ? 'has-error' : ''}}">
    <label for="Salida" class="control-label">{{ 'Salida' }}</label>
    <input class="form-control" name="Salida" type="datetime-local" id="Salida" value="{{ isset($bitacora->Salida) ? $bitacora->Salida : ''}}" >
    {!! $errors->first('Salida', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
