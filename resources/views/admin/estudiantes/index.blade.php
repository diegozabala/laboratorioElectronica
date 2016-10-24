@include ('admin.templates.partials.navbar1')

@section('title')
  Lista de Estudiantes
@endsection

@section('content')

  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-primary">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Registrar un nuevo estudiante
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">

          <!--Aqui va el formulario de registro de un nuevo estudiante-->
          <form class="row" action="{{route('electronica.estudiantes.store')}}" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
             <div class="box-body">
                <div class="form-group">
                    <input class="form-control" type="text" name="nombre" value="" placeholder="Nombre del estudiante" required>
                </div>
                <div class="form-group">           
                    <input class="form-control" type="text" name="apellido" value="" placeholder="Apellido del estudiante" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" name="cedula" value="" placeholder="Ingrese el número de documento">
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
              </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <button class="btn btn-primary">Registrar</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>

  <hr>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>Nombre</th> 
        <th>Apellido</th>
        <th>Cedula</th>
        <th>Carrera</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($estudiantes as $estudiante)
        <tr>
          <td>{{$estudiante->nombre}}</td>
          <td>{{$estudiante->apellido}}</td>
          <td>{{$estudiante->cedula}}</td>
          <td>{{$estudiante->carrera}}</td>
          <td><a href=" {{ route('electronica.estudiantes.edit',$estudiante->id) }} " class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
          <td><a href=" {{ route('electronica.estudiantes.destroy',$estudiante->id) }} " class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! $estudiantes->render() !!}
@endsection

@include ('admin.templates.partials.footer1')