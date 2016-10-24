@include ('admin.templates.partials.navbar1')

@section('title')
  Editar los datos del Estudiante {{$estudiante->nombre}}
@endsection

@section('content')

  {!! Form::open(['route'=>['electronica.estudiante.update',$estudiante],'method'=>'PUT','class'=>'form-horizontal']) !!}
  <div class="box-body">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
        <input class="form-control" type="text" name="nombre" value="{{$estudiante->nombre}}" required>
    </div>

    <div class="form-group">
      <label for="apellido">Apellido:</label>
        <input class="form-control" type="text" name="apellido" value="{{$estudiante->apellido}}" required>
    </div>

    <div class="form-group">
      <label for="cedula">Número de Documento:</label>
        <input class="form-control" type="number" name="cedula" value="{{$estudiante->cedula}}">
    </div>
    <div class="form-group">
      <label for="carrera">Carrera</label>

      <select class="form-control" type="text" name="carrera" style="width: 100%;">
        <optgroup label="Seleccione una Opción">
            <option>Ingeniería de Sistemas y Computación</option>
            <option>Ingeniería Electrónica</option>
            <option>Ingeniería Civil</option>
            <option>Tecnología en Topografía</option>
            <option>Física</option>
            <option>Tecnología en Instrumentación Electrónica</option>
            <option>Ingeniería de Alimentos</option>
        </optgroup>
      </select>
    </div>
  </div><!-- /.box-body -->
    <div class="box-footer">
        <button class="btn btn-primary" type="submit" name="editar">Registrar cambios</button>
    </div>
  {!! Form::close() !!}

@endsection

@include ('admin.templates.partials.footer1')