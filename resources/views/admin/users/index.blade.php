
@include ('admin.templates.partials.navbar1')

	<section class="section-login">
		<div class="panel panel-default">
		<div class="panel-heading">

			<h3 class="panel-tittle">Lista de Usuarios</h3>
		</div>
			<hr>

		<a href="{{route('admin.users.create')}}" class="btn btn-success">Registrar un nuevo auxiliar</a>
		<hr>
		<table class="table table-responsive">
    		<thead>
      			<tr>
        	<th class="active">Nombres</th>
        	<th class="active">Cedula</th>
        	<th class="active">Rol</th>
          <th class="active">Imagen</th>
			     <th class="active">ACTION</th>
      		</tr>
    		</thead>
    	<tbody>
    		@foreach($users as $usuario)
    			<tr>
    				<td>{{$usuario->nombre." ".$usuario->apellido}}</td>
    				<td>{{$usuario->cedula}}</td>
    				<td>{{$usuario->rol}}</td>
            <td>
            <?php 
              $direccion = "images/users/" . $usuario->nombre_imagen;
            ?>
                <img src="{{asset($direccion)}}" class="img-responsive">
            </td>
            

					     <td>
               <a href="{{ route('admin.user.destroy',$usuario->id) }}" class="btn btn-danger"
						   onclick="return confirm('¿Seguro desea eliminarlo?')">
               <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
               </a>

					     <a href="" class="btn btn-success"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
    			</tr>
    		@endforeach
         </tbody>
  </table>
		</div>
	</section>

@include ('admin.templates.partials.footer1')