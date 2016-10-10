@include ('admin.templates.partials.navbar')
<script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>

<div class="container">
    
<div class="row" style="margin-top:40px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

     <form class="form-horizontal" role="form" method="POST"
                      action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                <fieldset>
                    <h2>CREAR UN USUARIO!</h2>
                    <hr class="colorgraph">

                    <div class="form-group" >
                        <input type="email" class="form-control input-lg" name="email" placeholder="Email Adress">
                    </div>
                    <div class="form-group" >
                        <input type="text" class="form-control input-lg" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" name="apellido" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" name="cedula" placeholder="Cedula">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" name="password" placeholder="*********">
                    </div>

                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <input type="submit" class="btn btn-lg btn-success btn-block" value="Crear">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6" style="margin-top:20px">
                            <a href="" class="btn btn-lg btn-primary btn-block">Cancelar</a>
                        </div>
                    </div>
                </fieldset>
        </form>
    </div>
</div>

</div>  
@include ('admin.templates.partials.footer')