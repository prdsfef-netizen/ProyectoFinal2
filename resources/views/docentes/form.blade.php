

<label for="RFID">{{'RFID'}}</label>
    <input type="text" name="RFID" id="RFID" value="{{ isset($docente->rfid)?$docente->rfid:''}}">
    <br/>
    <label for="Nombres">{{'Nombres'}}</label>
    <input type="text" name="Nombres" id="Nombres" value="{{ isset($docente->Nombres)?$docente->Nombres:''}}">
    <br/>
    <label for="Apellidos">{{'Apellidos'}}</label>
    <input type="text" name="Apellidos" id="Apellidos" value="{{ isset($docente->Apellidos)?$docente->Apellidos:''}}">
    <br/>
    <label for="No_Empleado">{{'No_Empleado'}}</label>
    <input type="text" name="No_Empleado" id="No_Empleado" value="{{ isset($docente->No_Empleado)?$docente->No_Empleado:''}}">
    <br/>
    <input type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'}}">