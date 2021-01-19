<div class="form-group {{ $errors->has('Laboratorio') ? 'has-error' : ''}}">
    <label for="Laboratorio" class="control-label">{{ 'Laboratorio' }}</label>
    <input class="form-control" name="Laboratorio" type="text" id="Laboratorio" value="{{ isset($horario->Laboratorio) ? $horario->Laboratorio : ''}}" >
    {!! $errors->first('Laboratorio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Dia') ? 'has-error' : ''}}">
    <label for="Dia" class="control-label">{{ 'Dia' }}</label>
    <input class="form-control" name="Dia" type="text" id="Dia" value="{{ isset($horario->Dia) ? $horario->Dia : ''}}" >
    {!! $errors->first('Dia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Hora') ? 'has-error' : ''}}">
    <label for="Hora" class="control-label">{{ 'Hora' }}</label>
    <input class="form-control" name="Hora" type="datetime-local" id="Hora" value="{{ isset($horario->Hora) ? $horario->Hora : ''}}" >
    {!! $errors->first('Hora', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Create' }}">
</div>
