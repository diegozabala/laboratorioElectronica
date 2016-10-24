
<script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>

<div class="container">
    
<div class="row" style="margin-top:40px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

     <form class="form-horizontal" role="form" method="POST" name="registro"
                      action="{{ route('front.store')}}">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

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
                        <select name="rol" class="form-control">
                            <option value="admin">Administrador</option>
                            <option value="auxiliar">Auxiliar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" name="cedula" placeholder="Cedula">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" name="password" placeholder="*********">
                    </div>
                    </div>
                        <div class="form-group">
                            <label for="Imagen">Imagen</label>
                            <input type="file" class="form-control" name="imagen" placeholder="Inserte imagen" required>
                    </div>
                    
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <input type="submit" class="btn btn-lg btn-success btn-block" value="Crear">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6" style="margin-top:20px">
                            <a href="{{route('front.index') }}" class="btn btn-lg btn-primary btn-block">Cancelar</a>
                        </div>
                    </div>
                </fieldset>
        </form>
    </div>
</div>

</div>  